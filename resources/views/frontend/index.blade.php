@extends('frontend.layouts.base')
@section('content')
<style>
  .limited-lines {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
  }

  .two-lines {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }

  .swiper-arrow-style-02 {
    background-color: #F25767;
    border: 2px solid #F25767;
  }
</style>

<main><!-- Section -->
  <div class="swiper swiper-container" data-swiper-options='{
                  "slidesPerView": 1,
                  "spaceBetween": 0,
                  "loop": true,
                  "navigation": {
                    "nextEl": ".swiper-next-01",
                    "prevEl": ".swiper-prev-01"
                  },
                  "autoplay": {
                    "delay": 8000,
                    "disableOnInteraction": false
                  }
                }'>
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="bg-center bg-cover bg-no-repeat position-relative" style="background-image: url({{asset('static/frontend/assets/img/home-banner-1.jpg') }})">
          <div class="position-absolute top-0 start-0 end-0 bottom-0 bg-black bg-opacity-70"></div>
          <div class="container position-relative">
            <div class="row min-vh-75 align-items-center justify-content-center section">
              <div class="col-lg-9 text-center">
                <p class="fs-lg d-flex justify-content-center">
                  <span class=" bg-opacity-100 text-white px-4 py-1 rounded-pill" style="background-color: #F25767;">Your Hassle-Free Accomodation Partner</span>
                </p>
                <h1 class="display-1 text-white mb-4"> Discover Unbeatable Deals on Student Housing</h1>

                <p class="fs-lg text-white text-opacity-85"><b>Looking for room ? We got you covered</b> </p>
                <div class="d-flex justify-content-center pt-3"><a class="btn btn-danger" href="{{ route('frontend.rooms')}}">GET STARTED NOW &nbsp; <i class="bi bi-chevron-right "></i></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="bg-center bg-cover bg-no-repeat position-relative" style="background-image: url({{asset('static/frontend/assets/img/home-banner-4.jpg') }})">
          <div class="position-absolute top-0 start-0 end-0 bottom-0 bg-black bg-opacity-70"></div>
          <div class="container position-relative">
            <div class="row min-vh-75 align-items-center justify-content-center section">
              <div class="col-lg-9 text-center">
                <p class="fs-lg d-flex justify-content-center">
                  <span class=" bg-opacity-100 text-white px-4 py-1 rounded-pill" style="background-color: #F25767;">Your Hassle-Free Accomodation Partner</span>
                </p>
                <h1 class="display-1 text-white mb-4">The Cheapest Student Housing in Town</h1>
                <p class="fs-lg text-white text-opacity-85"><b>Uroom</b> is now Malaysia's Fatest Purpose-built Student Accomodation </p>
                <div class="d-flex justify-content-center pt-3"><a class="btn btn-danger" href="{{ route('frontend.rooms')}}">GET STARTED NOW &nbsp; <i class="bi bi-chevron-right "></i></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-arrow-style-02 me-3 swiper-next swiper-next-01"><i class="bi bi-chevron-right"></i></div>
    <div class="swiper-arrow-style-02 ms-3 swiper-prev swiper-prev-01"><i class="bi bi-chevron-left"></i></div>
  </div><!-- End Section --><!-- Section -->

  <!-- our satisfaction section -->
  <section class="py-3 mt-3">
    <div class="container">
      <div class="row gy-2">
        <div class="col-md-4">
          <div class="d-flex bg-primary bg-opacity-10 p-4 rounded-3"><span class="display-3 lh-1 text-primary"><i class="bi-shield"></i></span>
            <div class="col ps-4">
              <h5 class="mb-2">Excellence Safety</h5>
              <p class="m-0">Highlights our commitment to outstanding performance. </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex bg-primary bg-opacity-10 p-4 rounded-3"><span class="display-3 lh-1 text-primary"><i class="bi-award"></i></span>
            <div class="col ps-4">
              <h5 class="mb-2">Comfortable Quality</h5>
              <p class="m-0">TQuality is at the heart of everything we do.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex bg-primary bg-opacity-10 p-4 rounded-3"><span class="display-3 lh-1 text-primary"><i class="bi-hand-thumbs-up"></i></span>
            <div class="col ps-4">
              <h5 class="mb-2">Promise of Satisfaction</h5>
              <p class="m-0">Tincidunt elit magnis
                nulla facilisis
                sags</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Section --><!-- Section -->


  <!-- explore our rooms section -->
  <section class="section pt-0 mt-4">
    <div class="container">
      <div class="section-heading text-center">
        <h6 class="sm-title">What's
          happening</h6>
        <h2 class="h1">Explore our new rooms</h2>
      </div>
      <div class="row">
        @foreach ($rooms as $room)
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-2 mb-4">
          <div class="hover-scale hover-opacity position-relative">
            <!-- Status Label -->
            <div class="position-absolute top-0 start-0 mt-2 ms-2 z-2 d-flex justify-content-between w-90">
              <div>
                @if($room->IsAvailable == 0)
                <span class="badge bg-primary text-uppercase px-3 py-1 rounded">Available</span>
                @else
                <span class="badge bg-danger text-uppercase px-3 py-1 rounded">Already Booked</span>
                @endif
              </div>
              <div>
                @if($room->gender == 'M')
                <small class="badge badge-warning bg-black text-uppercase text-white bold px-3 py-1 rounded">Male</small>
                @else
                <small class="badge badge-warning bg-black text-uppercase text-white bold px-3 py-1 rounded">Female</small>
                @endif
              </div>
            </div>
            <!-- Image and Rating -->
            <div class="hover-scale-in rounded-3">
              <a href="{{ route('frontend.room_detail', $room->id)}}">
                <img src="{{ $room->photo_url }}" title alt class="img-fluid rounded-3">
              </a>
            </div>
            <a href="{{ route('frontend.room_detail', $room->id)}}">
            <div class="position-absolute top-0 start-0 w-100 z-1 d-flex justify-content-center hover-opacity-in p-3">
              <div class="bg-white text-uppercase fw-500 px-3 py-2 rounded shadow-sm fs-sm fw-600">

                <img src="{{ $room->logo_url }}" alt="" class="img img-thumbnail img-cartoon" style="width: max-content; height: max-content; object-fit: contain;">

              </div>
            </div>
            </a>
            <!-- Title and Price -->
            <div class="position-absolute bottom-0 start-0 end-0 p-2 z-1" style="background-color: rgba(0, 0, 0, 0.7);">
              <div class="text-center p-0">
                <h6 class="text-white"><a href="{{ route('frontend.room_detail', $room->id)}}" class="text-reset">{{ $room->Title }} - {{ $room->type_room->Name}}</a></h6>
                <p class="m-0 text-white text-opacity-100"><b>RM {{ $room->Price }} / Month</b></p>
                <small style="color: white;">
                  @for ($i = 1; $i <= 5; $i++)
                    @if ($i <=$room->Rate)
                    <!-- Full Star -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                      <polygon points="12 2 15 8 22 9 17 14 18 21 12 18 6 21 7 14 2 9 9 8 12 2"></polygon>
                    </svg>
                    @else
                    <!-- Empty Star -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                      <polygon points="12 2 15 8 22 9 17 14 18 21 12 18 6 21 7 14 2 9 9 8 12 2"></polygon>
                    </svg>
                    @endif
                    @endfor
                </small>
              </div>
            </div>
          </div>
        </div>

        @endforeach
      </div>

      <!-- Bouton Voir toutes les chambres -->
      <div class="text-center mt-4">
        <a href="{{ route('frontend.rooms') }}" class="btn btn-danger">See All rooms</a>
      </div>

    </div>
  </section><!-- end section --><!-- section -->

  <!-- Video Presentation Section -->
  <section class="section py-5 bg-gray-25">
      <div class="container">
          <div class="row align-items-center">
              <!-- Video Column -->
              <div class="col-lg-6 d-flex justify-content-center">
                  <div class="video-wrapper " style="width: 100%; height:100%">
                      <div class="embed-responsive embed-responsive-16by9">
                          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bTZwlwqC1_Q" allowfullscreen></iframe>
                      </div>
                  </div>
              </div>
              <!-- Text Column -->
              <div class="col-lg-6">
                  <div class="info">
                      <h2 class="text-gray">Easily Rent Your Room with Uroom</h2>
                      <p class="lead text-muted">Whether you're across town or across the globe, Uroom lets you explore and secure the perfect room remotely. Start now and make your move hassle-free.</p>
                      <!-- <p class="mb-4">Whether you're across town or across the globe, Uroom lets you explore and secure the perfect room remotely. Start now and make your move hassle-free.</p> -->
                      <a href="https://www.youtube.com/watch?v=bTZwlwqC1_Q" target="_blank" class="btn btn-danger">Watch the Full Video</a>
                  </div>
              </div>
          </div>
      </div>
  </section>

<!-- Accomodation Process -->

  <!-- Hussle Accomodation section -->
  <section class="section">
    <div class="container">
      <div class="row gy-5 align-items-center">
        <div class="col-lg-6"><img src="{{asset('static/frontend/assets/img/show.png') }}" title alt></div>
        <div class="col-lg-6 ps-lg-10">

          <h2 class="h1 mb-4">Your Hassle-Free Accomodation Partner</h2>
          <p>We’re here to make finding and renting your perfect room as
            smooth and stress-free as possible.Trust us to handle the details so you can
            focus on enjoying your new home away from home</p>

          <ul class="list-unstyled m-0 pt-6 pb-5">
            <div class="row">
              <div class="col-lg-3 col-3 col-md-3 col-sm-3">
                <li class="d-flex py-1 ">
                  <span class="icon-xs bg-danger text-white rounded-circle">
                    <i class="fas fa-wifi"></i>
                  </span>
                  <span class="col fs-lg ps-2">Wifi </span>
                </li>
                <li class="d-flex py-1 ">
                  <span class="icon-xs bg-danger text-white rounded-circle">
                    <i class="fas fa-temperature-low"></i>
                  </span>
                  <span class="col fs-lg ps-2">Fridge</span>
                </li>
                <li class="d-flex py-1 ">
                  <span class="icon-xs bg-danger text-white ">
                    <i class="fas fa-warehouse"></i>
                  </span>
                  <span class="col fs-lg ps-2">Wardrobe</span>
                </li>
              </div>
              <div class="col-lg-4 col-4 col-md-4 col-sm-4">
                <li class="d-flex py-1 ">
                  <span class="icon-xs bg-danger text-white rounded-circle">
                    <i class="fas fa-bed"></i>
                  </span>
                  <span class="col fs-lg ps-2">BedFrame</span>
                </li>
                <li class="d-flex py-1 ">
                  <span class="icon-xs bg-danger text-white rounded-circle">
                    <i class="fas fa-tv"></i>
                  </span>
                  <span class="col fs-lg ps-2">Television</span>
                </li>
                <li class="d-flex py-1 align-items-center">
                  <span class="icon-xs bg-danger text-white rounded-circle">
                    <i class="fas fa-chair"></i></span>
                  <span class="col fs-lg ps-2">Study Table</span>
                </li>
              </div>
              <div class="col-lg-5 col-5 col-md-5 col-sm-5">
                <li class="d-flex py-1 align-items-center">
                  <span class="icon-xs bg-danger text-white rounded-circle">
                    <i class="fas fa-utensils"></i>
                  </span>
                  <span class="col fs-lg ps-2">Cook Utensils</span>
                </li>
                <li class="d-flex py-1 align-items-center">
                  <span class="icon-xs bg-danger text-white rounded-circle">
                    <i class="fas fa-sync-alt"></i>
                  </span>
                  <span class="col fs-lg ps-2">Washing Machine</span>
                </li>
                <li class="d-flex py-1 align-items-center">
                  <span class="icon-xs bg-danger text-white rounded-circle">
                    <i class="fas fa-chess"></i>
                  </span>
                  <span class="col fs-lg ps-2">Dart & Board Games</span>
                </li>
              </div>
            </div>

          </ul>
          <a class="btn btn-danger" href="{{ route('frontend.rooms')}}">Dicover More</a>
        </div>
      </div>
    </div>
  </section><!-- End Section --><!-- Section -->
  <!-- section -->

  <!-- video call option section -->
  <section class="section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="info">
                    <h1 class="h1">Explore Rooms Virtually</h1>
                    <p class="lead">See your future room from anywhere in the world with a live video call. Schedule a virtual tour and get a real-time look at the room, ensuring it's the perfect fit for you.</p>
                    <a href="#" class="btn btn-danger mt-3">Schedule a Video Call</a>
                </div>
            </div>
            <div class="col-lg-7 text-center">
                <img src="{{ asset('static/frontend/assets/img/vcall3.jpg') }}" style="max-width: 80%; height:auto;" alt="Video Call Preview">
            </div>
        </div>
    </div>
</section>

 
  <!-- statistics clients -->
  <div class="section py-5">
      <div class="container">
          <div class="section-heading text-center mb-5">
              <h2 class="text-dark">Our Statistics!</h2>
          </div>
          <div class="row gy-5">
              <div class="col-6 col-lg-3">
                  <div class="text-center">
                      <div class="display-4 text-dark lh-1 pb-2">{{ $total_rooms_available }}</div>
                      <span class="h6 text-muted">Rooms Available</span>
                  </div>
              </div>
              <div class="col-6 col-lg-3">
                  <div class="text-center">
                      <div class="display-4 text-dark lh-1 pb-2">120</div>
                      <span class="h6 text-muted">Rooms Booked</span>
                  </div>
              </div>
              <div class="col-6 col-lg-3">
                  <div class="text-center">
                      <div class="display-4 text-dark lh-1 pb-2">120+</div>
                      <span class="h6 text-muted">Total Users</span>
                  </div>
              </div>
              <div class="col-6 col-lg-3">
                  <div class="text-center">
                      <div class="display-4 text-dark lh-1 pb-2">30</div>
                      <span class="h6 text-muted">Partners</span>
                  </div>
              </div>
          </div>
      </div>
  </div>



  <!-- our happy clients -->
  <section
    class="section bg-gray-100">
    <div class="container">
      <div
        class="section-heading text-center">
        <h6 class="sm-title">Testimonials</h6>
        <h2 class="h1">Our Happy Clients!</h2>
      </div>
      <div class="swiper-hover-arrow">
        <div
          class="swiper swiper-container" data-swiper-options='{
                              "slidesPerView": 1,
                              "spaceBetween": 30,
                              "loop": false,
                              "pagination": {
                                "el": ".swiper-pagination",
                                "clickable": true
                                },
                                "navigation": {
                                    "nextEl": ".swiper-next-02",
                                    "prevEl": ".swiper-prev-02"
                                },
                              "breakpoints": {
                                "768": {
                                  "slidesPerView": 1
                                },
                                "991": {
                                  "slidesPerView": 2
                                },
                                "1150": {
                                  "slidesPerView": 3
                                }
                              }
                            }'>
          <div class="swiper-wrapper">
            @foreach($rates as $rate)
            <div
              class="swiper-slide">
              <div class="card card-body p-4 p-lg-5">
                <div class="d-flex align-items-center">
                  <div
                    class="avatar-lg"><img class="avatar-img rounded-circle"
                      src="{{ $rate->photo_url }}" title alt></div>
                  <div
                    class="col ps-4 position-relative">
                    <h6
                      class="text-uppercase mb-0">{{ $rate->name }}</h6><span
                      class="text-black">{{ $rate->faculty}}</span>
                  </div>
                </div>
                <div
                  class="pt-4">
                  <div
                    class="pb-2 d-flex align-items-center justify-content-center justify-content-sm-start">
                    @for ($i = 1; $i <= 5; $i++)
                      @if ($i <=$rate->rate)
                      <!-- Full Star -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                        <polygon points="12 2 15 8 22 9 17 14 18 21 12 18 6 21 7 14 2 9 9 8 12 2"></polygon>
                      </svg>
                      @else
                      <!-- Empty Star -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                        <polygon points="12 2 15 8 22 9 17 14 18 21 12 18 6 21 7 14 2 9 9 8 12 2"></polygon>
                      </svg>
                      @endif
                      @endfor

                      <span class="h6 ps-2 m-0 fw-500 fs-sm">{{ $rate->rate }}</span></div>

                  <div class="mb-3">{{ $rate->description }}</div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="swiper-arrow-style-02 swiper-prev swiper-prev-02"><i class="bi bi-chevron-left"></i>
          </div>
          <div class="swiper-arrow-style-02 swiper-next swiper-next-02"><i
              class="bi bi-chevron-right"></i>
          </div>
          <div class="swiper-pagination mt-5 d-none position-relative"></div>
        </div>
      </div>
    </div>
  </section>


  <!-- our partners -->
  <section class="section">
    <div class="container">
      <div class="section-heading text-center">
        <h6 class="sm-title">Our Partners</h6>
        <h2 class="h1">Trusted Partners</h2>
      </div>
      <div class="swiper-hover-arrow">
        <div class="swiper swiper-container" data-swiper-options='{
                  "slidesPerView": 1,
                  "spaceBetween": 20,
                  "loop": true,
                  "pagination": {
                      "el": ".swiper-pagination",
                      "clickable": true
                  },
                  "navigation": {
                      "nextEl": ".swiper-next-02",
                      "prevEl": ".swiper-prev-02"
                  },
                  "breakpoints": {
                      "768": {
                          "slidesPerView": 2
                      },
                      "991": {
                          "slidesPerView": 3
                      },
                      "1150": {
                          "slidesPerView": 4
                      }
                  }
              }'>
          <div class="swiper-wrapper">
            @foreach($partners as $partner)
            @php
            $logoUrl = str_replace('\\', '/', $partner->logo_url);
            @endphp
            <div class="swiper-slide">
              <div class="p-1" style="max-width: 300px; max-height: 250px;">
                <div class="d-flex justify-content-center align-items-center h-100">
                  <img src="{{ asset($logoUrl) }}" alt="Partner Logo" class="img-fluid" style="max-width: 280px; max-height: 185px;">
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="swiper-arrow-style-02 swiper-prev swiper-prev-02">
            <i class="bi bi-chevron-left"></i>
          </div>
          <div class="swiper-arrow-style-02 swiper-next swiper-next-02">
            <i class="bi bi-chevron-right"></i>
          </div>
          <div class="swiper-pagination mt-5 d-none position-relative"></div>
        </div>
      </div>
    </div>
  </section>










</main><!-- End Main --><!-- Footer --><!-- Footer -->

@endsection