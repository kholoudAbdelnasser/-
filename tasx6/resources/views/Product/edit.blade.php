@extends('admin.parent');
@section('title', 'Edit_product')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h2>Product_info</h2>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-row">
                            <div class="col-12">
                                <label for="name_en">NameEN</label>
                            <input type="text" name="name_en" id="name_en" value="{{$product->name_en}}" class="form-control" placeholder="" >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <label for="name_ar">NameAR</label>
                                <input type="text" name="name_ar" id="name_ar" value="{{$product->name_ar}}" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-4">
                                <label for="code">code</label>
                                <input type="text" name="code" id="code" value="{{$product->code}}" class="form-control" placeholder="">
                            </div>

                            <div class="col-4">
                                <label for="price">Price</label>
                                <input type="number" name="price" id="price" value="{{$product->price}}" class="form-control" placeholder="">
                            </div>

                            <div class="col-4">
                                <label for="quantity">Quantity</label>
                                <input type="number" name="quantity" id="quantity" value="{{$product->quantity}}" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-4">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option @selected($product->status == 1) value="1">Active</option>
                                    <option @selected($product->status == 0) value="0">Not Active</option>
                                </select>
                            </div>

                            <div class="col-4">
                                <label for="brand_id">brand </label>
                                <select name="brand_id" id="brand_id" class="form-control">
                                    @foreach ($brands as $brand)
                                    <option @selected($brand->id == $product->brand_id) value="{{$brand->id}}">{{ $brand->name_en }} - {{$brand->name_ar}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="col-4">
                                <label for="subcategory_id">subcategory </label>
                                <select name="subcategory_id" id="subcategory_id" class="form-control">
                                    @foreach ($subcategories as $subcategory)
                                    <option @selected($subcategory->id == $product->subcategory_id) value="{{$subcategory->id}}">{{ $subcategory->name_en }} - {{$subcategory->name_ar}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-6">
                                <label for="desc_en">desc_en</label>
                                <textarea name="desc_en" id="desc_en" class="form-control" cols="25" rows="6" placeholder="">{{$product->desc_en}}</textarea>
                            </div>

                            <div class="col-6">
                                <label for="desc_ar">dasc_ar</label>
                                <textarea name="desc_ar" id="desc_ar" class="form-control" cols="25" rows="6" placeholder="">{{$product->desc_ar}}</textarea>
                            </div>


                        </div>
                        <div class="form-row my-5">
                            <div class="col-6">
                                <img src="{{asset("imgs/pro/{$product->image}")}}" class="w-100" alt="{{$product->name_en}}">
                                <input type="file" name="image" id="image" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-6">
                                <button class="btn btn-info ">Update</button>
                            </div>


                        </div>

                    </form>
                </div>
            </div>




        </div>
    </div>
@endsection
