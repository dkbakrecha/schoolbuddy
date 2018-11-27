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
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

</head>

<body>

    @include('inc/navbar')    

    @if (Request::is('/'))

    @include('inc/slider')

    @else

    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">
            @yield('page-title')
            <small>@yield('page-subtitle')</small>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
          </li>
          <li class="breadcrumb-item active">Contact</li>
      </ol>
  </div>
  @endif

  <!-- Page Content -->
  <div class="container">
    @yield('content')
</div>
<!-- /.container -->

@include('inc/footer')


<!-- Bootstrap core JavaScript -->
<script src="{{ asset('vendor/business/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/business/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>