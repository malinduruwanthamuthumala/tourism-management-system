@extends('layouts.basic')

@section('content')
<div class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('images/ww.jpeg') }}" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('images/t.jpeg')}}" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('images/a.jpeg') }}" alt="Third slide">
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



<!-- Start your project here-->
<div style="height: 100vh">
  <div class="flex-center flex-column">
      <h1 class="animated fadeIn mb-4">Material Design for Bootstrap</h1>

      <h5 class="animated fadeIn mb-3">Thank you for using our product. We're glad you're with us.</h5>

      <p class="animated fadeIn text-muted">MDB Team</p>
  </div>
</div>
<!-- /Start your project here-->
@endsection
