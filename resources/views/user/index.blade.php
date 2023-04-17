@extends('user.headerfooter')
@section('user-body')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
      <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item">
            <img class="w-100" src="img/carousel-1.jpg" alt="Image">
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <h1 class="display-3 text-dark mb-4  slideInDown">
                      Insurance Creates Wealth For Everyone
                    </h1>
                    <p class="fs-5 text-body mb-5">
                      Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                      duo justo magna dolore erat amet
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item active">
            <img class="w-100" src="img/carousel-2.jpg" alt="Image">
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <h1 class="display-3 text-dark mb-4  slideInDown">
                      The Best Insurance Begins Here
                    </h1>
                    <p class="fs-5 text-body mb-5">
                      Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                      duo justo magna dolore erat amet
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- Carousel End -->
    <div class="row g-4 justify-content-center">
            @foreach($category as $value)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="service-item rounded h-100 p-5">
                    <div class="d-flex align-items-center ms-n5 mb-4">
                        <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                            <img class="img-fluid" src="img/icon/icon-10-light.png" alt="">
                        </div>
                        <center>
                            <h4 class="mb-0">CATEGORY : {{$value->category}}</h4>
                        </center>
                    </div>
                    <a class="btn btn-light px-3" href="">Read More</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection