<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('website/images/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Darcybookkeepingservice.com</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('website/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('website/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/owl.css')}}">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    @include('layouts.header')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
   @yield('content')


   @include('layouts.footer')


    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('website/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('website/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


    <!-- Additional Scripts -->
    <script src="{{asset('website/js/custom.js')}}"></script>
    <script src="{{asset('website/js/owl.js')}}"></script>
</body>

</html>