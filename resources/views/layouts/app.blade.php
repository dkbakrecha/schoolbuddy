<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('vendor/business/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/modern-business.css') }}" rel="stylesheet">

        <link href="{{ asset('css/schoolfront.css') }}" rel="stylesheet">
        <link href="{{ asset('css/school-responsive.css') }}" rel="stylesheet">
        <link href="{{ asset('css/colors.css') }}" rel="stylesheet">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

    </head>

    <body>

        @include('inc/navbar')    

        @if (Request::is('/'))

        @include('inc/slider')

        @else

        <div id="cms-header">
            <div class="container">
                <h3>
                    @if (\Request::is('contact-us'))  
                    <img src="{{ URL::to('/') }}/images/lulu/Mail.png" class="cms-icon" alt="">  
                    @elseif (\Request::is('about-us'))  
                    <img src="{{ URL::to('/') }}/images/lulu/Graph.png" class="cms-icon" alt="">  
                    @elseif (\Request::is('events'))  
                    <img src="{{ URL::to('/') }}/images/lulu/Trophy.png" class="cms-icon" alt="">  
                    @elseif (\Request::is('galleries'))  
                    <img src="{{ URL::to('/') }}/images/lulu/Camera.png" class="cms-icon" alt="">  
                    @elseif (\Request::is('admission'))  
                    <img src="{{ URL::to('/') }}/images/lulu/Pencil.png" class="cms-icon" alt="">  
                    @endif

                    @yield('page-title')
                    <small>@yield('page-subtitle')</small>
                </h3>

                <ol class="breadcrumb" style="display: none;">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </div>
        </div>
        @endif

        <!-- Page Content -->
        <div class="container">
            @yield('content')
        </div>
        <!-- /.container -->

        @include('inc/footer')


        <!-- Bootstrap core JavaScript -->
        <script src="{{ asset('vendor/business/bootstrap/js/jquery.js') }}"></script>
        <script src="{{ asset('vendor/business/bootstrap/js/bootstrap.min.js') }}"></script>

        <script type="text/javascript">
            $('#carouselExampleIndicators').carousel();

            </script>
<!-- <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script> -->

    </body>

</html>