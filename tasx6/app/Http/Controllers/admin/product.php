<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class product extends Controller
{
    public function index(){
        $prodact_data=DB::table('products')->get();
        return view("Product.Index",compact('prodact_data'));
    }
    public function create(){

        $brands=DB::table('brands')->select('id','name_en','name_ar')->get();
        $subcategories=DB::table('subcategories')->select('id','name_en','name_ar')->get();
       
        return view('Product.Create',compact('brands','subcategories'));




    }
    public function edit($id){
        $brands=DB::table('brands')->select('id','name_en','name_ar')->get();
        $subcategories=DB::table('subcategories')->select('id','name_en','name_ar')->get();
        $product = DB::table('products')->where('id', $id)->first();
        return view('Product.edit',compact('brands','subcategories','product'));



            }
            public function store(Request $req){
                $req->validate([
                    "name_en" => ['required','string','max:512'],
                    "name_ar" => ['required','string','max:512'],
                    "code" => ['required','digits:6','numeric','unique:products'],
                    "price" => ['required','numeric','between:1.00,99999.99'],
                    "quantity" => ['nullable','integer','between:1,999'],
                    "status" => ['required','integer','in:0,1'],
                    "brand_id" => ['nullable','integer','exists:brands,id'],
                    "subcategory_id" => ['required','integer','exists:subcategories,id'],
                    "desc_en" => ['required','string'],
                    "desc_ar" => ['required','string'],
                    "image" => ['required','max:1000','mimes:jpg,png,jpeg'],
                ]);
             
                $pro_data=$req->except('_token' ,'image');
                $img_name=$req->image->hashName();
                $req->image->move(public_path("imgs\pro"),$img_name);
              
                $pro_data['image']=$img_name;
                DB::table('products')->insert($pro_data);
                return redirect()->route('dashboard.products.index')->with('succ','Created successfull');

            }



}
