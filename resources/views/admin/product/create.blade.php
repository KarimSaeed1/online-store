@extends('admin.master')
@section('title',' Form insert')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <h3> Add New Product </h3>
            <div class="col-md-6">
                <div class="panel-body">
                    <form action="{{route('product.store')}}" method="post" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group{{$errors->has('pro_name')?'has error':''}}">
                            <label for="pro_name"> Name</label>
                            <input type="text" class="form-control" name="pro_name" id="pro_name" placeholder="enter name">
                            <span class="text-danger">{{$errors->first('pro_name')}}</span>
                        </div>

                        <div class="form-group{{$errors->has('pro_code')?'has error':''}}">
                            <label for="pro_code"> Code</label>
                            <input type="text" class="form-control" name="pro_code" id="pro_code" placeholder="enter code">
                            <span class="text-danger">{{$errors->first('pro_code')}}</span>

                        </div>

                        <div class="form-group{{$errors->has('pro_price')?'has error':''}}">
                            <label for="pro_price"> Price </label>
                            <input type="text" class="form-control" name="pro_price" id="pro_price" placeholder="enter price">
                            <span class="text-danger">{{$errors->first('pro_price')}}</span>

                        </div>

                        <div class="form-group{{$errors->has('stock')?'has error':''}}">
                            <label for="stock"> stock </label>
                            <input type="text" class="form-control" name="stock" id="stock" placeholder="enter stock">
                            <span class="text-danger">{{$errors->first('stock')}}</span>

                        </div>

                        <div class="form-group{{$errors->has('pro_info')?'has error':''}}">
                            <label for="pro_info"> Description </label>
                            <textarea class="form-control"name="pro_info"id="pro_info" rows="5"></textarea>
                            <span class="text-danger">{{$errors->first('pro_info')}}</span>

                        </div>

                        <div class="form-group{{$errors->has('category_id')?'has error':''}}">
                            <label for="category_id"> Category </label>
                            <select class="form-control" name="category_id" id="category_id">
                                <option value="">
                                    -- Select Category --
                                </option>
                                @foreach($categories as $id=> $category)
                                    <option value="{{$id}}"> {{$category}}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{$errors->first('category_id')}}</span>

                        </div>
                        <div class="form-group{{$errors->has('image')?'has error':''}}">
                            <label for="image"> Image </label>
                            <input type="file"name="image"id="image"class="form-control">
                            <span class="text-danger">{{$errors->first('image')}}</span>

                        </div>
                        <div class="form-group{{$errors->has('spl_price')?'has error':''}}">
                            <label for="spl_price"> Sale Price </label>
                            <input type="text" class="form-control" name="spl_price" id="spl_price" placeholder="enter  sale price">
                            <span class="text-danger">{{$errors->first('spl_price')}}</span>

                        </div>
                        <button class="btn btn-primary" type="submit"> submit</button>
                    </form>
                </div>
            </div>
        </main>
@endsection
