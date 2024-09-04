<style>
  a .active{
    background-color: blue;
  }
</style>
<header class="main-header main-header-01 headroom navbar-light sticky-top bg-white">
      <div class="bg-black py-1">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 d-flex justify-content-center justify-content-md-start fs-sm">
              <span class="text-white pe-3"><i class="fa fa-phone me-2"></i>
              @isset($phone->Phone)
                    {{ $phone->Phone }}
              @endisset
              </span> <span class="text-white"><i class="fa fa-envelope me-2"></i>
                  @isset($email->Email)
                      {{ $email->Email }}
                  @endisset
              </span></div>
            <div class="col-md-6 d-none d-md-flex justify-content-end text-white">
              @if(auth()->check())
                Welcome, {{ auth()->user()->first_name }}
                @else 
                <a class="btn btn-light-soft fs-sm p-0 icon-xs rounded-circle me-2" href="https://www.facebook.com/uroom43?mibextid=LQQJ4d">
                <i class="bi-facebook"></i> </a>
                <a class="btn btn-light-soft fs-sm p-0 icon-xs rounded-circle me-2" href="https://www.instagram.com/uroom43?igsh=MWF0d3pyYTU4bmh4aQ==">
                  <i class="bi-twitter"></i>
                </a>
                <a class="btn btn-light-soft fs-sm p-0 icon-xs rounded-circle me-2" href="https://www.instagram.com/uroom43?igsh=MWF0d3pyYTU4bmh4aQ==">
                  <i class="bi-instagram"></i> 
                </a>
                <a class="btn btn-light-soft fs-sm p-0 icon-xs rounded-circle me-2" href="https://www.instagram.com/uroom43?igsh=MWF0d3pyYTU4bmh4aQ==">
                  <i class="bi-linkedin"></i>
                </a>
              @endif
              </div>
          </div>
        </div>
      </div><!-- End Header -->
      <nav class="navbar navbar-expand-lg">
        <div class="container"><!-- Logo -->
          <a class="navbar-brand header-navbar-brand" href="{{ route('frontend.index')}}">
          @isset($logo->photo_url)
            <img class="logo-dark" src="{{ $logo->photo_url ? $logo->photo_url : 'Logo' }}" title alt style="width: 145px; height: auto;" > 
            @endisset
          </a><!-- Logo --><!-- Menu -->
          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas_Header_01" aria-labelledby="offcanvas_Header_01Label">
            <div class="offcanvas-header">
              <div class="offcanvas-title" id="offcanvas_Header_01Label">
              @isset($logo->photo_url)
                <img src="{{ $logo->photo_url ? $logo->photo_url : 'Logo' }}" title alt  style="width: 145px; height: auto;">
                @endisset
              </div><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item ">
                  <a href="{{route('frontend.index')}}" class="nav-link {{ request()->is('/') ? 'active' : ''}} ">HOME</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('frontend.rooms')}}" class="nav-link {{ request()->is('visit-our-rooms') ? 'active' : ''}}">ROOMS</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('frontend.partners')}}" class="nav-link {{ request()->is('our-partners') ? 'active' : ''}}">PARTNERS</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('frontend.about')}}" class="nav-link {{ request()->is('about-us') ? 'active' : ''}}">ABOUT</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('frontend.contact')}}" class="nav-link {{ request()->is('contact-us') ? 'active' : ''}}">CONTACT</a>
                </li>
              </ul>
            </div>
          </div><!-- End Menu -->
          <div class="nav d-flex ps-4"><!-- Mobile Toggle --> <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_Header_01" aria-controls="offcanvas_Header_01" aria-label="Toggle navigation"><span class="toggler-icon"></span></button><!-- End Mobile Toggle -->
            @if(auth()->check())
              <a href="{{ route('myProfile')}}" class="btn btn-danger text-nowrap btn-sm d-lg-flex text-uppercase ls-2">
                My profile 
              </a>
             
            @else
            <a href="{{ route('login')}}" class="btn btn-danger text-nowrap btn-sm d-lg-flex text-uppercase ls-2">
                Log in 
              </a>
            @endif
          </div>
          
        </div>
      </nav>
    </header><!-- End Header --><!-- End Header --><!-- Main -->