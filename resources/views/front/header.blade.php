<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#494949">
    <a class="navbar-brand" href="#"><img src="{{url('dist/images/logo.png')}}"alt="" ></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{url('front')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('front/shop')}}">Shop</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php $cats=\Illuminate\Support\Facades\DB::table('categories')->get(); ?>
                    @foreach($cats as $cat)
                    <a class="dropdown-item" href="{{url('category',$cat->id)}}">{{ucwords($cat->name)}}</a>
                        @endforeach
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/contact')}}"> Contact </a>
            </li>
            <li class="nav-item">
                <a href="{{url('WishList')}}" class="nav-link">
                    <i class="fa fa-star"></i> Wishlist
                </a>
            </li>
            <?php if(Auth::check()){ ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">{{Auth::user()->name}}</a>
                    <a class="dropdown-item" href="{{url('/logout')}}">Logout</a>
                    <a class="dropdown-item" href="{{url('/')}}/profile">Profile</a>
                </div>
            </li>
            <?php }else{ ?>
            <li class="nav-item"><a class="nav-link" href="{{url('/login')}}">Login</a></li>
            <?php }?>

            <li class="nav-item" style="list-style-type: none;">
                <a href="{{url('/cart')}}" class="nav-link">&nbsp;Cart&nbsp;({{Cart::count()}} items)&nbsp;({{Cart::total()}} $)</a>
            </li>
        </ul>
    </div>
</nav>
