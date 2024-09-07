@extends('frontend.layouts.base')
@section('content')

  <section class="bg-center bg-cover bg-no-repeat position-relative section" style="background-image: url({{asset('static/frontend/assets/img/home-banner-2.jpg') }})">
    <div class="position-absolute top-0 start-0 end-0 bottom-0 bg-black bg-opacity-80"></div>
    <div class="container position-relative">
      <h2 class="display-3 fw-700 text-white lh-1 mb-4">Universities we serve</h2>
      <p class="text-white">
        Find the best student homes near prestigious universities
      </p>
    </div>
  </section><!-- End Section --><!-- section -->

  <section class="section">
    <div class="container">
      <div class="row" id="partners-container">
        @foreach($partners as $partner)
        @php
        $photoUrl = $partner->logo_url ? str_replace('\\', '/', $partner->logo_url) : '';
        @endphp
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class=" mb-3">
            <div class="hover-scale hover-opacity position-relative">
              <div class="hover-scale-in rounded-3">
                <a href="#">
                  <img src="{{ asset($photoUrl) }}" title="{{ $partner->name }}" alt="{{ $partner->name }}">
                </a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        @if($partners_count > 12)
        <!-- la pagination  -->
        <nav class="mt-4" aria-label="Page navigation">
          <ul class="pagination justify-content-end">
            @if($partners->previousPageUrl())
            <li class="page-item">
              <a class="page-link" href="{{ $partners->previousPageUrl() }}" aria-label="Précédent">
                <span aria-hidden="true">&laquo; Preview</span>
              </a>
            </li>
            @else
            <li class="page-item disabled">
              <span class="page-link" aria-hidden="true">&laquo; Preview</span>
            </li>
            @endif
            {{-- Link for next page --}}
            @if($partners->nextPageUrl())
            <li class="page-item">
              <a class="page-link" href="{{ $partners->nextPageUrl() }}" aria-label="Suivant">
                <span aria-hidden="true">Next &raquo;</span>
              </a>
            </li>
            @else
            <li class="page-item disabled">
              <span class="page-link" aria-hidden="true">Next &raquo;</span>
            </li>
            @endif
          </ul>
        </nav>
        @endif

      </div>

    </div>
  </section>

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
                      class="text-primary">{{ $rate->faculty}}</span>
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
@endsection