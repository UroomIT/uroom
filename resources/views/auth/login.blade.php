<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }} | login </title>
    <link rel="icon" type="image/x-icon" href="../src/assets/img/favicon.ico"/>
    <link href="{{ asset('static/layouts/vertical-light-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('static/layouts/vertical-light-menu/loader.js') }}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('static/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- <link href="{{ asset('static/src/assets/css/light/authentication/auth-boxed.css') }}" rel="stylesheet" type="text/css" /> -->
    <!-- /src/assets/css/light/authentication/auth-boxed.css -->
     <!-- /src/assets/css/dark/authentication/auth-boxed.css -->

    <!-- <link href="{{ asset('static/layouts/vertical-light-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="{{ asset('static/src/assets/css/light/authentication/auth-cover.css') }}" rel="stylesheet" type="text/css" /> -->
    
    
    <link href="{{ asset('static/layouts/horizontal-light-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('static/src/assets/css/light/authentication/auth-boxed.css') }}" rel="stylesheet" type="text/css" />
    
    <link href="{{ asset('static/layouts/horizontal-light-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('static/src/assets/css/dark/authentication/auth-boxed.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- END GLOBAL MANDATORY STYLES -->
    
</head>
<body class="form">
    <div class="auth-container d-flex">
        <div class="container mx-auto align-self-center">
            <div class="row">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                    <div class="card mt-3 mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-3 text-center">
                                    <a href="{{ route('frontend.index')}}">
                                        <img src="{{ asset('static/src/assets/img/logo.png') }}" class="img img-fluid" alt="" width="50%">
                                    </a>
                                    <p class="mb-2">Please Enter your email and password to login</p>
                                    @error('password') 
                                        <div class="alert alert-danger bg-danger d-flex align-items-center" role="alert">
                                            <!-- <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg> -->
                                            <div>
                                            Please check your Login information
                                            </div> &nbsp;&nbsp;&nbsp;
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="color: white;"><i class="fa fa-times-circle fa-lg" style="color:white"></i></button>
                                           
                                        </div>
                                    @enderror
                                   
                                </div>
                                <form action="{{ route('def_log_user') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Email *</label>
                                            <input type="email" name="email" class="form-control" placeholder="exp: example@gmail.com">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <label class="form-label">Password *</label>
                                            <input type="password" name="password" class="form-control">
                                            <small>Please enter your password, minimum 8 words</small>
                                            
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <div class="form-check form-check-primary form-check-inline">
                                                <input class="form-check-input me-3" type="checkbox" id="form-check-default">
                                                <label class="form-check-label" for="form-check-default">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <button type="submit" class="btn btn-secondary w-100">SIGN IN</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-12 mb-4">
                                    <div class="">
                                        <a href="{{ route('frontend.index')}}">Back to URooM website</a>
                                        <!-- <div class="seperator"> -->
                                            <!-- <hr> -->
                                            <!-- <div class="seperator-text"></div> -->
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <!-- <div class="col-12">
                                    <div class="text-center">
                                        <p class="mb-0">Dont't have an account ? <a href="javascript:void(0);" class="text-warning">Sign Up</a></p>
                                    </div>
                                </div> -->
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>

    </div>
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    @include('flashy::message')
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('static/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->


</body>
</html>