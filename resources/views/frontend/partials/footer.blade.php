<footer class="footer bg-black">
      <div class="footer-top py-6 py-md-7 py-lg-9">
        <div class="container">
          <div class="row gy-5">
            <div class="col-lg-4 col-xl-3">
              <div class="pb-4">
                @isset($logo->photo_url)
                <img src="{{ $logo->photo_url }}" title alt  style="width: 150px; height: auto;">
                @endisset
              </div>
              <address class="white-link mb-4">
                <p class="text-white mb-2 m-0 text-opacity-75">
                  <b>We</b> are now Malaysia's Fatest Purpose-built Student Accomodation
                </p>
              </address>
              <div class="nav fs-5">
                <a class="me-3 text-white" href="#"><i class="bi bi-facebook"></i> </a>
                <a class="me-3 text-white" href="#"><i class="bi bi-twitter"></i> </a>
                <a class="me-3 text-white" href="#"><i class="bi bi-instagram"></i> </a>
                <a class="me-3 text-white" href="#"><i class="bi bi-linkedin"></i></a></div>
            </div>
            <div class="col-lg-8 ms-auto">
              <div class="row gy-5">
              
                <div class="col-6 col-lg-3">
                  <h5 class="text-white footer-title-01 font-alt fs-lg">Company</h5>
                  <ul class="list-unstyled footer-link-01 m-0">
                    <li><a class="text-white text-opacity-75" href="{{ route('frontend.index')}}">Home</a></li>
                    <li><a class="text-white text-opacity-75" href="{{ route('frontend.rooms')}}">Rooms</a></li>
                    <li><a class="text-white text-opacity-75" href="{{ route('frontend.partners')}}">Partners</a></li>
                    <li><a class="text-white text-opacity-75" href="{{ route('frontend.about')}}">About</a></li>
                    <li><a class="text-white text-opacity-75" href="{{ route('frontend.contact')}}">Contact</a></li>
                  </ul>
                </div>
                <div class="col-6 col-lg-3">
                </div>

                <div class="col-sm-6 col-lg-6">
                  <h5 class="text-white footer-title-01 font-alt fs-lg">Subscribe</h5>
                  <p class="mb-3 text-white text-opacity-80">You can subscribre to our daily emails to get best offers 
                    for rooms
                  </p>
                  <form class="d-flex flex-row mb-2 p-1 bg-white input-group rounded">
                    <input type="email" class="form-control rounded-0 border-0" placeholder="youremail@gmail.com">
                     <button class="btn btn-danger rounded flex-shrink-0" type="submit">Submit</button></form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="opacity-50 m-0">
      <div class="py-2">
        <div class="container">
          <div class="row gy-3 align-items-center">
            <div class="col-md-6">
              <ul class="nav justify-content-center justify-content-md-start my-2 links-white small list-unstyled footer-link-01 m-0">
                <li class="p-0 mx-3 ms-md-0 me-md-3"><a href="#" class="link-white opacity-7">Privace &amp;
                    Policy</a></li>
                <li class="p-0 mx-3 ms-md-0 me-md-3"><a href="#" class="link-white opacity-7">FAQ</a></li>
               
              </ul>
            </div>
            <div class="col-md-6 text-center text-md-end">
              <p class="text-white text-opacity-85 small m-0">© {{ date('Y')}} {{ config('app.name')}}</p>
            </div>
          </div>
        </div>
      </div>
    </footer><!-- End Footer --><!-- End Footer -->