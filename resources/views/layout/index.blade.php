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
    <!-- Menu CSS -->
    <link href="{{ url ('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ url ('css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ url ('css/style.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ url ('css/colors/default.css')}}" id="theme" rel="stylesheet">

    @stack('css')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="{{ route('home')}}">
                        <!-- Logo icon image, you can use font-icon also --><b>
                            <!--This is dark logo icon--><img src="{{ url ('plugins/images/admin-logo.png')}}" alt="home"
                                class="dark-logo" />
                            <!--This is light logo icon--><img src="{{ url ('plugins/images/admin-logo-dark.png')}}" alt="home"
                                class="light-logo" />
                        </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                            <!--This is dark logo text--><img src="{{ url ('plugins/images/admin-text.png')}}" alt="home"
                                class="dark-logo" />
                            <!--This is light logo text--><img src="{{ url ('plugins/images/admin-text-dark.png')}}" alt="home"
                                class="light-logo" />
                        </span>
                    </a>
                </div>
                
                
                {{-- <div class="top-left-part">
                    <!-- Logo -->
                   <div class="title">
                        <h1 style="font-weight: 700;color: #2f323e"> poltekskes</h1>
                   </div>
                </div> --}}
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left">
                    <li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><i
                                class="ti-menu">&nbsp; Politeknik Kesehatan Yogyakarta</i></a></li>

                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <div>
                            <h3>test</h3>
                        </div>
                    </li>
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i
                                    class="fa fa-search"></i></a>
                        </form>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img
                                src="{{ url ('plugins/images/users/varun.jpg')}}" alt="user-img" width="36" class="img-circle"><b
                                class="hidden-xs">{{Auth::user()->name}}</b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    {{-- <div class="u-img"><img src="../plugins/images/users/varun.jpg" alt="user" /></div> --}}
                                    <div class="u-text">
                                        <h4>{{ Auth::user()->name}}</h4>
                                        <p class="text-muted">{{ Auth::user()->email}}</p>
                                    </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-user"></i> {{ Auth::user()->role}}</a></li>

                            <li><a href="{{ route('logout')}}" method="POST"><i class="fa fa-power-off"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>

                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
       
    
        
       
        @include('layout.sidebar')
            
       
        @include('layout.sidebar')
            
       
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            @yield('content')
            <!-- /.container-fluid -->
            <footer class="footer text-center ">2021 &copy; Unit Teknologi Informasi
                Politeknik Kesehatan Yogyakarta 
                
                    {{-- <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 text-center">2021 &copy; Unit Teknologi Informasi
                            Politeknik Kesehatan Yogyakarta </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-right font-light">Supported by LDP</div>
                    </div> --}}
               
            </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{ url ('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url ('bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ url ('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{ url ('js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ url ('js/waves.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ url ('js/custom.min.js')}}"></script>
    <script src="{{ url ('js/validator.js')}}"></script>
    <!--Style Switcher -->
    <script src="{{ url ('plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
    @stack('js')
    @stack('script')
</body>

</html>