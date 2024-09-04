<!doctype html>
<html lang="zxx">
<!-- Mirrored from pxdraft.com/wrap/trigon/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Apr 2024 04:38:57 GMT -->

<head><!-- metas -->
  <meta charset="utf-8">
  <meta name="author" content="pxdraft">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta name="keywords" content="Spares Auto – Automotive Templates">
  <meta name="description" content="Spares Auto – Automotive Templates"><!-- title -->
  <title>{{ config('app.name')}} – Feels Like Home</title><!-- Favicon -->
  @if($logo && method_exists($logo, 'photo_url'))
  <link rel="shortcut icon" href="{{ $logo->photo_url ? $logo->photo_url : 'Logo' }}"><!-- Google Fonts -->
  @endif
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&amp display=swap" rel="stylesheet"><!-- CSS Template -->
  <link href="{{asset('static/frontend/assets/css/style.css') }}" rel="stylesheet">

  <style>
      .whatsapp-button {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #25D366;
        color: white;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        z-index: 1000;
    }

    .whatsapp-button img {
        width: 30px;
        height: 30px;
    }
  </style>
</head>
<body>

  <!-- Skippy & Prload -->
  <!-- skippy --> 
  <a id="skippy" class="skippy visually-hidden-focusable overflow-hidden" href="#content">
    <div class="container"><span class="u-skiplink-text">Skip to main content</span>
    </div>
  </a>
  <!-- Edn Skippy & Prload --><!-- 
    ========================
        Wrapper 
    ========================
    -->
    <div class="wrapper"><!-- Header --><!-- Header -->
   
        @include('frontend.partials.header')
        @yield('content')
        <a href="https://wa.me/60124243438" class="whatsapp-button" target="_blank">
            <img src="{{ asset('static/frontend/assets/img/whatsapp.png') }}" alt="WhatsApp">
        </a>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        @include('flashy::message')
        @include('frontend.partials.footer')

      </div>
    
<!-- script start --><!--bootstrap-->
  <script src="{{asset('static/frontend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script><!-- swiper JS -->
  <script src="{{asset('static/frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script><!-- Headroom JS -->
  <script src="{{asset('static/frontend/assets/vendor/headroom/headroom.min.js') }}"></script><!-- glightbox JS -->
  <script src="{{asset('static/frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script><!-- Timezz JS -->
  <script src="{{asset('static/frontend/assets/vendor/timezz/timezz.js') }}"></script><!-- Theme JS -->
  <script src="{{asset('static/frontend/assets/js/theme.js') }}"></script><!-- End script start -->
  @yield('js')
</body>
<!-- Mirrored from pxdraft.com/wrap/trigon/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Apr 2024 04:39:07 GMT -->
</html>