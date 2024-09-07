<footer class="footer bg-black">
      <div class="footer-top py-6 py-md-7 py-lg-9">
        <div class="container">
          <div class="row gy-5">
            <div class="col-lg-4 col-xl-3">
              <div class="pb-4">
                @isset($logo->photo_url)
                <img src="{{asset('static/frontend/assets/img/footer.png') }}" title alt  style="width: 150px; height: auto;">
                @endisset
              </div>
              <address class="white-link text-white mb-4">
                <b>Address:</b>
                <p class="text-white">
                No, 1-2-29, 2nd Floor,  Block C Phase II, Diamond Square,
                Jalan 1/50 Off Jalan Gombak, 53000 Setapak, Kuala Lumpur.
                </p>
              </address>
              <div class="nav fs-6 text-white">
                <b>Office Hours:</b>
                <p class="text-white">
                Monday - Friday 9:00 am -  6:00 pm (Malaysia GMT + 8)
                </p> 
              </div>
              <div class="nav fs-6 text-white">
                <b>OFFICE:</b> &nbsp;&nbsp;
                <p class="text-white">
                  +60 3-4032 2043
                </p> 
              </div>
              <div class="nav fs-6 text-white">
                <b>FAX :</b> &nbsp;&nbsp;
                <p class="text-white">
                  +60 3-4032 3043
                </p> 
              </div>
              
            </div>
            <div class="col-lg-8 ms-auto">
              <div class="row gy-5">
                <div class="col-6 col-lg-3">
                  <h5 class="text-white footer-title-01 font-alt fs-lg">Company</h5>
                  <ul class="list-unstyled footer-link-01 m-0">
                    <li><a class="text-white text-opacity-75" href="{{ route('frontend.index')}}">Home</a></li>
                    <li><a class="text-white text-opacity-75" href="{{ route('frontend.rooms')}}">Rooms</a></li>
                    <li><a class="text-white text-opacity-75" href="{{ route('frontend.partners')}}">Universities</a></li>
                    <li><a class="text-white text-opacity-75" href="{{ route('frontend.about')}}">About Us</a></li>
                    <li><a class="text-white text-opacity-75" href="{{ route('frontend.contact')}}">Contact Us</a></li>
                  </ul>
                </div>
                <div class="col-6 col-lg-3">
                </div>

                <div class="col-sm-6 col-lg-6">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                  <h5 class="text-white footer-title-01 font-alt fs-lg">Subscribe</h5>
                  <p class="mb-3 text-white text-opacity-80">You can subscribe to our daily emails to get best offers 
                    for rooms
                  </p>
                  <form method="post" action="{{ route('emailSubscribe') }}" class="d-flex flex-row mb-2 p-1 bg-white input-group rounded">
                    @csrf
                    <input type="email" class="form-control rounded-0 border-0" name="email" placeholder="youremail@gmail.com">
                     <button class="btn btn-danger rounded flex-shrink-0" type="submit">Subscribe</button>
                  </form>
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
            <div class="col-md-4">
              <ul class="nav justify-content-center justify-content-md-start my-2 links-white small list-unstyled footer-link-01 m-0">
                <li class="p-0 mx-3 ms-md-0 me-md-3">
                  <a href="#" class="link-white opacity-7">Copyright © {{ date('Y')}} KPK Uroom Sdn Bhd</a></li>
                
              </ul>
            </div>
            <div class="col-md-8 text-center text-md-end">
              <p class="text-white text-opacity-85 small m-0"> In Collobration with Universiti Putra Malaysia (UPM) </p>
            </div>
          </div>
        </div>
      </div>
    </footer><!-- End Footer --><!-- End Footer -->