@extends('front.master')
@section('title','Contact Page')
@section('content')
    <div class="contact-page">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-uppercase"> <a href="{{url('front')}}" class="text-primary">Home</a></li>
                <li class="breadcrumb-item active text-uppercase">Contact</li>
            </ol>
        </div>
        <!-- Contact page-->
        <section class="contact p-t-small">
            <div class="container">
                <header class="mb-5">
                    <h1 class="heading-line">Contact</h1>
                </header>
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-icon">
                            <div class="icon icon-051-placeholder-1"></div>
                        </div>
                        <h3>Address</h3>
                        <p class="text-muted font-weight-light">Suez/egypt</p>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-icon">
                            <div class="icon icon-051-support"></div>
                        </div>
                        <h3>Call center</h3>
                        <p><strong>01550527057</strong></p>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-icon">
                            <div class="icon icon-051-message"></div>
                        </div>
                        <h3>Electronic support</h3>
                        <ul class="list-style-none">
                            <li><strong><a href="mailto:">karimsaeed@gmail.com</a></strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div id="map">                                       </div>
        <section>
            <div class="container">
                <header class="mb-5">
                    <h2 class="heading-line">Contact form</h2>
                </header>
                <div class="row">
                    <div class="col-md-7">
                        <form id="contact-form" method="post" action="contact.php" class="custom-form form">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Your firstname </label>
                                            <input type="text" name="name" id="name" placeholder="Enter your firstname" required="required" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="surname">Your lastname </label>
                                            <input type="text" name="surname" id="surname" placeholder="Enter your  lastname" required="required" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Your email </label>
                                    <input type="email" name="email" id="email" placeholder="Enter your  email" required="required" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="message">Your message for us </label>
                                    <textarea rows="4" name="message" id="message" placeholder="Enter your message" required="required" class="form-control"></textarea>
                                </div>
                                <input type="submit" value="Send message" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5">
                        <div class="social">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-behance"></i></a></li>
                                <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Search Panel-->
    <div class="search-overlay">
        <div class="search-inner d-flex justify-content-center align-items-center">
            <div class="search-close"><i class="icon-close"></i></div>
        </div>
    </div>

@endsection
