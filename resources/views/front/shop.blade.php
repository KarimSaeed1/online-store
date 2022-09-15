@extends('front.master')
@section('title','Shop Page')
@section('content')
    <main role="main">
        <div class="jumbotron">
            <h1 class="display-4">welcome to karim store</h1>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button"> karimsaeed@gmail.com</a>
            </p>
        </div>
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    @forelse($products as $product)
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img class="card-img-top" alt="Card image cap" src="{{url('images',$product->image)}}">
                                <div class="card-body">
                                    <p class="card-text">{{$product->pro_name}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a type="button" class="btn btn-sm btn-outline-secondary" href="{{url('product.show',$product->id)}}">View Product</a>
                                            <a href="{{url('cart/addItem',$product->id)}}" class="btn btn-sm btn-outline-secondary">Add to cart<i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h3> No products</h3>
                    @endforelse
                </div>
            </div>
        </div>

    </main>
@endsection
