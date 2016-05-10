<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>政大藝術季</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Bootstrap Styles -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- pugin Styles -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    @yield('style')
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }
    </style>
</head>

<body id="app-layout">
 <nav class="navbar navbar-inverse navbar-fixed-top bg-dark" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <img class="ncculogo"src="{{URL::asset('img/app/nccu_logo.png')}}" alt="">
            <a class="navbar-brand" href="#">政大藝術季X校友返校日</a>
        </div>
    </div>
</nav>

@yield('content')

<section id="footer">
    <div class="container">
        <hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <img src="{{URL::asset('img/app/cht_logo.png')}}" class="img-responsive img-centered">
                </div>
            </div>
            <!-- /.row -->
        </footer>
    </div>
</section>

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- Custome Scripts -->
@yield('script')
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
