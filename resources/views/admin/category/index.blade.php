@extends('admin.master')
@section('title','Category page')
@section('content')
    <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3" style="margin-top: 50px">
            <h3 style="color: #721c24"> List Categories</h3><br>
        <ul class="nav navbar-nav">
            @if(!empty($categories))
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th> Category ID </th>
                                <th> Category name </th>
                            </tr>
                            </thead>
                            <tbody>
                                    @forelse($categories as $category)
                                        <tr>
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->name}}</td>
                                        </tr>
                                    @empty
                                        <li>no category</li>
                                    @endforelse
                            </tbody>
                        </table>
                    </div>
            @endif
        </ul>
        <br><br>
        <form action="{{route('category.store')}}" method="post" role="form">
            @csrf
            <div class="form-group">
                <input type="text" id="name" name="name" class="form-control" placeholder="category name">
                    <br>
            <button type="submit" class="btn btn-primary">save</button>
            </div>
        </form>
    </main>
@endsection
