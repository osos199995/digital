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

                </div>
            </div>
            <div class="row">


    <h2>About Company</h2>
    <p>HTML developers are front-end web developers who use coding languages to create the visual appearance of websites. They are employed by corporations and small businesses alike, and many work on a freelance basis. HTML developers must possess a love for learning new skills, as the environment and technology related to this career are constantly changing. HTML developers often collaborate with web designers and back-end web developers. Because this is a demanding job, candidates must be able to effectively handle stress. Well-organized people with strong time mana</p>
<div>
    <h4>job requirements</h4>
    <p>{!! $job->job_requirements !!}</p>
</div>
       <div>
           <h4>job responsabilities</h4>
           <p>{!! $job->job_reponsabilities !!}</p>
       </div>




                @if ($errors->has('description'))
                    <div class="alert alert-danger">{{ $errors->first('description') }}</div>
            @endif


                <!-- Modal -->
            </div>
            <div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    apply now
                </button>
                @if ($errors->has('first_name'))
                    <div class="alert alert-danger">{{ $errors->first('first_name') }}</div>
                @endif
                @if ($errors->has('last_name'))
                    <div class="alert alert-danger">{{ $errors->first('last_name') }}</div>
                @endif
                @if ($errors->has('position'))
                    <div class="alert alert-danger">{{ $errors->first('position') }}</div>
                @endif
                @if ($errors->has('cv'))
                    <div class="alert alert-danger">{{ $errors->first('cv') }}</div>
                @endif
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apply to Digital Capital</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <div class="modal-body">
                        {!! Form::open(['method'=>'post','action'=>['CareersController@store'],'files'=>true]) !!}
                        <div class="form-group">
                            <label for="exampleInputEmail1">first name</label>

                            <input type="text" name='first_name' class="form-control" id="exampleInputEmail1">
                                @if ($errors->has('first_name'))
                                    <div class="alert alert-danger">{{ $errors->first('first_name') }}</div>
                                @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">last name</label>
                            <input type="text"  name='last_name' class="form-control" id="exampleInputEmail1" >
                            @if ($errors->has('last_name'))
                                <div class="alert alert-danger">{{ $errors->first('last_name') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">position</label>
                            <input type="text"  name='position'class="form-control" id="exampleInputEmail1" >
                            @if ($errors->has('position'))
                                <div class="alert alert-danger">{{ $errors->first('position') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Cv</label>
                            <input type="file"  name="cv" class="form-control-file" id="exampleFormControlFile1">
                            @if ($errors->has('cv'))
                                <div class="alert alert-danger">{{ $errors->first('cv') }}</div>
                            @endif
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">send</button>
                        </div>
                        {!! Form::close() !!}

                    </div>

                </div>
            </div>
        </div>

    </section>
@stop


@section('script')

@stop