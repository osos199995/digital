@extends('layouts.front')

@section('styles')

@stop

@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <img class ="navbar-brand js-scroll-trigger"src="{{asset('front_assets/img/logo.png')}}" alt="Smiley face" height="124" width="175"> </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{route('home')}}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{route('home')}}">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{route('careers')}}">careers</a>
                    </li>
                    <!--<li class="nav-item">-->
                    <!--  <a class="nav-link js-scroll-trigger" href="#about">About</a>-->
                    <!--</li>-->
                    <!--<li class="nav-item">-->
                    <!--  <a class="nav-link js-scroll-trigger" href="#team">Team</a>-->
                    <!--</li>-->
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{route('home')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Digital Capital</div>
                <div class="intro-heading text-uppercase">come work with us</div>


            </div>
        </div>
    </header>


    <section class="bg-light page-section" id="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase"> our careers</h2>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4 col-sm-6 careers-item">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('front_assets/img/careers/web.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">web Develobment</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{route('openpositions')}}" class="btn btn-primary">open Positions</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 careers-item">
                    <div class="card" style="width: 18rem; margin-top: 20px;">
                        <img src="{{asset('front_assets/img/careers/web.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">VR</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{route('openpositions')}}" class="btn btn-primary">open Positions</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6 careers-item">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('front_assets/img/careers/web.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">3D Modeling</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{route('openpositions')}}" class="btn btn-primary">open Positions</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 careers-item">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('front_assets/img/careers/web.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Graphic desigin</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{route('openpositions')}}" class="btn btn-primary">open Positions</a>
                        </div>
                    </div>


                </div>
            </div>
    </section>
@stop


@section('script')

@stop