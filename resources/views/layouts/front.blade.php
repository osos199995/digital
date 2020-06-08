<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>Digital Capital</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('front_assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="shortcut icon" type="image/png" href="{{asset('front_assets/img/favicon.png')}}"/>
    <link href="{{asset('front_assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{asset('front_assets/css/agency.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->




@yield('content')
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                </span class="copyright">Copyright &copy  Digital Capital 2020</span>
                <!--<span class="copyright" id="demo"></span>-->
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                        <a href="https://www.linkedin.com/company/digital-capital69" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.youtube.com/channel/UCs8MxmV5H2RMwksSirGhK7A?disable_polymer=true" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="mailto:info@dc.com.eg">
                            <i class="fas fa-envelope"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <!--<li class="list-inline-item">-->
                    <!--  <a href="#">Privacy Policy</a>-->
                    <!--</li>-->
                    <!--<li class="list-inline-item">-->
                    <!--  <a href="#">Terms of Use</a>-->
                    <!--</li>-->
                    <li>

                        <h5>Email: info@dc.com.eg</h5>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JavaScript -->
<script src="{{asset('front_assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('front_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Plugin JavaScript -->
<script src="{{asset('front_assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Contact form JavaScript -->
<script src="{{asset('front_assets/js/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('front_assets/js/contact_me.js')}}"></script>

<!-- Custom scripts for this template -->
<script src="{{asset('front_assets/js/agency.min.js')}}"></script>
// <script>
    // var d = new Date();
    // var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    // document.getElementById("demo").innerHTML = months[d.getMonth()];
    // </script>
</body>

</html>
