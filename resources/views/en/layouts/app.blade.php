<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>website</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">



    <!-- Bootstrap core CSS -->
    <link href="{{ asset('en/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('en/css/style.css') }}" rel="stylesheet">



    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
</head>
<body>
<div style="width: 100%;height: 100vh;display: flex;align-items: center;justify-content: center;{{ \Route::currentRouteName() !== 'home' ? 'display: none' : 'display:flex'}}" id="logoWrapper">
    <img src="{{ asset('img/logo.jpg') }}" alt="">
</div>
<header id="header" style="{{ \Route::currentRouteName() !== 'home' ? 'display: block' : 'display:none'}}">
    @include('en.layouts.navbar')
</header>

<main id="main"  style="{{ \Route::currentRouteName() !== 'home' ? 'display: block' : 'display:none'}}">

@yield('slider')


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

     @yield('content')

    </div><!-- /.container -->


    <!-- FOOTER -->
{{--    <footer class="container">--}}
{{--        <p class="float-end"><a href="#">Back to top</a></p>--}}
{{--        <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>--}}
{{--    </footer>--}}
</main>


<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
<script>
    setTimeout(function () {
       $('#header').css('display','block');
       $('#main').css('display','block');
       $('#logoWrapper').css('display','none');
    },2000);
    $(document).ready(function () {
        $('.carousel').carousel({
            interval: 6000,
            wrap:true,
            pause:false
        })
    });
</script>

@include('sweet::alert')
</body>
</html>
