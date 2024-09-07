@extends('frontend.layouts.base')
@section('content')
<!-- Section -->
<section class="bg-center bg-cover bg-no-repeat position-relative section" style="background-image: url({{asset('static/frontend/assets/img/home-banner-2.jpg') }})">
    <div class="position-absolute top-0 start-0 end-0 bottom-0 bg-black bg-opacity-80"></div>
    <div class="container position-relative">
        <h2 class="display-3 fw-700 text-white lh-1 mb-4">Find your new home here</h2>
        <p class="text-white">We are the Malaysia's Fastest Purpose-built Student Accomodation. Join our rooms and have more
            advantages in terms of price, space and maintenance.
            <!-- The Cheapest Student housing in Kuala Lumpur. -->
        </p>
    </div>
</section><!-- End Section -->

<section class="section">
    <div class="container">
        <div class="row gy-5">
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
              <small class="badge badge-dark bg-black text-uppercase text-white bold px-3 py-1 rounded">Male</small>
              @else
              <small class="badge badge-dark bg-black text-uppercase text-white bold px-3 py-1 rounded">Female</small>
              @endif
            </div>
            </div>
            <!-- Image and Rating -->
            <a href="{{ route('frontend.room_detail', $room->id)}}">
            <div class="hover-scale-in rounded-3">
                <img src="{{ $room->photo_url }}" title alt class="img-fluid rounded-3">
            </div>
            </a>
            <div class="position-absolute top-0 start-0 w-100 z-1 d-flex justify-content-center hover-opacity-in p-3">
            <a href="{{ route('frontend.room_detail', $room->id)}}">  
                <div class="bg-white text-uppercase fw-500 px-3 py-2 rounded shadow-sm fs-sm fw-600">
                    <img src="{{ $room->logo_url }}" alt="" class="img img-thumbnail img-cartoon" style="width: max-content; height: max-content; object-fit: contain;">
                </div>
              </a>
            </div>
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
        <div class="pt-3">
            <ul class="pagination justify-content-center">
                {{-- Pevious page --}}
                @if($rooms->previousPageUrl())
                <li class="page-item">
                    <a class="page-link" href="{{ $rooms->previousPageUrl() }}" aria-label="Pevious">
                        <span aria-hidden="true">&laquo; Pevious</span>
                    </a>
                </li>
                @else
                <li class="page-item disabled">
                    <span class="page-link" aria-hidden="true">&laquo; Pevious</span>
                </li>
                @endif
                {{-- Next Page --}}
                @if($rooms->nextPageUrl())
                <li class="page-item">
                    <a class="page-link" href="{{ $rooms->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">Next &raquo;</span>
                    </a>
                </li>
                @else
                <li class="page-item disabled">
                    <span class="page-link" aria-hidden="true">Next &raquo;</span>
                </li>
                @endif
            </ul>
        </div>
    </div>
</section>







<!-- our partners -->
<section class="section bg-gray-100">
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
                              <div class="p-1" style="max-width: 250px; max-height: 200px;">
                                  <div class="d-flex justify-content-center align-items-center h-100">
                                      <img src="{{ asset($logoUrl) }}" alt="Partner Logo" class="img-fluid" style="max-width: 200px; max-height: 200px;">
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
@endsection