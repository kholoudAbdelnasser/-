@extends('admin.parent');
@section('title', 'Create_product')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-success">
                    <h2>Product_info</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('dashboard.products.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-12">
                                <label for="name_en">Name_EN</label>
                                <input type="text" name="name_en" id="name_en" class="form-control" placeholder=""
                                    value="{{ old('name_en') }}">
                                @error('name_en')
                                    <div class="text-danger bg-black ">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <label for="name_ar">Name_AR</label>
                                <input type="text" name="name_ar" id="name_ar" class="form-control" placeholder=""
                                    value="{{ old('name_ar') }}">
                                @error('name_ar')
                                    <div class="text-danger bg-black ">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-4">
                                <label for="code">code</label>
                                <input type="text" name="code" id="code" class="form-control" placeholder=""
                                    value="{{ old('code') }}">
                                @error('code')
                                    <div class="text-danger bg-black ">* {{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-4">
                                <label for="price">Price</label>
                                <input type="number" name="price" id="price" class="form-control" placeholder=""
                                    value="{{ old('price') }}">
                                @error('price')
                                    <div class="text-danger bg-black ">* {{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-4">
                                <label for="quantity">Quantity</label>
                                <input type="number" name="quantity" id="quantity" class="form-control" placeholder=""
                                    value="{{ old('quantity') }}">
                                @error('quantity')
                                    <div class="text-danger bg-black ">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-4">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option @selected(old('status') == 1) value="1"> active</option>
                                    <option @selected(old('status') == 0) value="0">Not_active</option>
                                </select>
                                @error('status')
                                    <div class="text-danger bg-black ">* {{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-4">
                                <label for="brand_id">Brand_id </label>
                                <select name="brand_id" id="brand_id" class="form-control">
                                    @foreach ($brands as $brand)
                                        <option  @selected(old('brand_id') == $brand->id)  value="{{ $brand->id }}">{{ $brand->name_en }} -
                                            {{ $brand->name_ar }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('brand_id')
                                    <div  class="text-danger font-weight-bold">* {{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-4">
                                <label for="subcategory_id">Subcategory_id </label>
                                <select name="subcategory_id" id="subcategory_id" class="form-control">
                                    @foreach ($subcategories as $subcategory)
                                        <option @selected(old('subcategory_id') == $subcategory->id) value="{{ $subcategory->id }}">
                                            {{ $subcategory->name_en }} -
                                            {{ $subcategory->name_ar }}</option>
                                    @endforeach
                                </select>
                                @error('subcategory_id')
                                    <div class="text-danger font-weight-bold">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-6">
                                <label for="desc_en">desc_en</label>
                                <textarea name="desc_en" id="desc_en" class="form-control" cols="25" rows="6" placeholder="">{{ old('desc_en') }}</textarea>
                                @error('desc_en')
                                    <div class="text-danger bg-black ">* {{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="desc_ar">dasc_ar</label>
                                <textarea name="desc_ar" id="desc_ar" class="form-control" cols="25" rows="6" placeholder="">{{ old('desc_ar') }}</textarea>
                                @error('desc_ar')
                                    <div class="text-danger bg-black ">* {{ $message }}</div>
                                @enderror
                            </div>


                        </div>
                        <div class="form-row my-5">
                            <div class="col-6">

                                <input type="file" name="image" id="image" class="form-control" placeholder="">
                                @error('image')
                                    <div class="text-danger bg-black ">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-6">

                                <button class="btn btn-success ">Create</button>
                            </div>


                        </div>

                    </form>
                </div>
            </div>




        </div>
    </div>
@endsection
