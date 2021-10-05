<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ url ('bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ url ('css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ url ('css/style.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ url ('css/colors/default.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <section id="wrapper" class="new-login-register">
        <div class="lg-info-panel">
            <div class="inner-panel">
                {{-- <a href="javascript:void(0)" class="p-20 di"><img src="../plugins/images/admin-logo.png"></a> --}}
                <div class="lg-content">
                    <h2>POLITEKNIK KESEHATAN YOGYAKARTA</h2>
                    <p class="text-muted">Jl. Tatabumi No. 3, Banyuraden, Gamping, Sleman </br>
                        Email: info@poltekkesjogja.ac.id | (0274) 617601
                    </p>
                   
                    {{-- <a href="#" class="btn btn-rounded btn-danger p-l-20 p-r-20"> Buy now</a> --}}
                </div>
            </div>
        </div>
        <div class="new-login-box">
            <div class="white-box">
                <h3 class="box-title m-b-0">Dodipolkeyo</h3>
                {{-- <small>Enter your details below</small> --}}
                <form  method= "POST"class="form-horizontal new-lg-form" id="loginform" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group  m-t-20">
                        <div class="col-xs-12">
                            <label>Email Address</label>
                            <input id="email" class="form-control" type="email" name="email" required="email" placeholder="Email Pengguna">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <label>Password</label>
                            <input id="password"class="form-control" type="password" required="" name="password" placeholder="Password">
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-info pull-left p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> Remember me </label>
                            </div>
                            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i
                                    class="fa fa-lock m-r-5"></i> Forgot pwd?</a>
                        </div>
                    </div> --}}
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button
                                class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light"
                                type="submit">Log In</button>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                            <div class="social"><a href="javascript:void(0)" class="btn  btn-facebook"
                                    data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true"
                                        class="fa fa-facebook"></i> </a> <a href="javascript:void(0)"
                                    class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i
                                        aria-hidden="true" class="fa fa-google-plus"></i> </a> </div>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Don't have an account? <a href="register.html" class="text-primary m-l-5"><b>Sign
                                        Up</b></a></p>
                        </div>
                    </div> --}}
                </form>
                
            </div>
        </div>


    </section>
    <!-- jQuery -->
    <script src="{{ url ('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url ('bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ url ( 'plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>

    <!--slimscroll JavaScript -->
    <script src="{{ url ('js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ url ('js/waves.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ url ('js/custom.min.js')}}"></script>
    <!--Style Switcher -->
    <script src="{{ url ( 'plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
</body>

</html>