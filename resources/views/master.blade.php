<!DOCTYPE html>
<html>
<head>
    <title>
        @section('title')
        Apollo Testing
        @show
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS are placed here -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
        @section('styles')
        body {
            padding-top: 60px;
        }
        @show
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">


    <!-- Scripts are placed here -->
    <script language="JavaScript" src="bootstrap/js/bootstrap.min.js"></script>

</head>

<body>
<!-- Navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <!-- Everything you want hidden at 940px or less, place within here -->
            <div class="nav-collapse">
                <ul class="nav">
                    <li><a href="{{{ URL::to('') }}}">Home</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Container -->
<div class="container">

    <!-- Content -->
    @yield('content')

</div>

</body>
</html>