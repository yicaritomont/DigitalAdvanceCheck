
<!DOCTYPE html>
<html>
<head>
  <title>Digital Advance Check</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="_token" content="{{ csrf_token() }}">
  
  <link rel="shortcut icon" href="{{ asset('/icon.ico') }}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  <!-- plugin css -->
  {!! Html::style('assets/plugins/@mdi/font/css/materialdesignicons.min.css') !!}
  {!! Html::style('assets/plugins/perfect-scrollbar/perfect-scrollbar.css') !!}
  <!-- end plugin css -->

  <!-- plugin css -->
  @stack('plugin-styles')
  <!-- end plugin css -->

  <!-- common css -->
  {!! Html::style('css/app.css') !!}
  <!-- end common css -->

  @stack('style')
</head>
<body data-base-url="{{url('/')}}"  style="background-color:#EFEFF1') }}); background-size: cover;">

  <div class="container-scroller" id="app">
    <div class="container">
      @yield('content')
    </div>
  </div>
  <!-- base js -->
  {!! Html::script('js/app.js') !!}
  <!-- end base js -->

  <!-- plugin js -->
  @stack('plugin-scripts')
  <!-- end plugin js -->

  <br><br>
  @extends('startPage.banner')

  @stack('custom-scripts')
  <div class="container">
    <div class="content-wrapper">
      <div class="row">
        <div class="jumbotron jumbotron-fluid jumboblue">
          <div class="container">
            <h1 class="display-4 text-blue text-center text-white"><b>¿Porqué es importante conocer el nivel de madurez digital?</b></h1>
            <hr>
            <p class="lead text-center text-white"><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</i></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="jumbotron jumbotron-fluid col-12">
          <div class="col-md-12 col-xl-12 grid-margin stretch-card">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block" src="{{ asset('assets/images/carousel/banner_1.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="{{ asset('assets/images/carousel/banner_2.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="{{ asset('assets/images/carousel/banner_3.jpg') }}" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="{{ asset('assets/images/carousel/banner_4.jpg') }}" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="{{ asset('assets/images/carousel/banner_5.jpg') }}" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="{{ asset('assets/images/carousel/banner_6.jpg') }}" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="{{ asset('assets/images/carousel/banner_7.jpg') }}" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="{{ asset('assets/images/carousel/banner_8.jpg') }}" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <a href="#" class="btn-flotante">Contáctenos</a>
    </div>
  </div>
</body>
</html>