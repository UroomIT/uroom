@extends('frontend.layouts.base')
@section('content')
@php
$photoUrl = str_replace('\\', '/', $room->photo_url);
@endphp
<section class="bg-center bg-cover bg-no-repeat position-relative section" style="background-image: url('{{ asset($photoUrl) }}')">
    <div class="position-absolute top-0 start-0 end-0 bottom-0 bg-black bg-opacity-90"></div>
    <div class="container position-relative">
        <h2 class="display-5 fw-700 text-white mb-0">{{$room->Title }} - {{ $room->type_room->Name}}</h2>
        <p class="text-white">{{ $room->Address }} - {{ $room->university->name }}</p>
    </div>
</section>
<!-- End Section -->
<!-- End Section -->
<section class="section">
    <div class="container">
        <div class="row gy-4 flex-row-reverse">
            <div class="col-lg-8 col-xl-9">
                <div class="mb-2">
                    @foreach($portfolios as $portfolio )
                    @php
                    $photoUrl = str_replace('\\', '/', $room->photo_url);
                    $photoUrl1 = str_replace('\\', '/', $portfolio->photo1_url);
                    $photoUrl2 = str_replace('\\', '/', $portfolio->photo2_url);
                    $photoUrl3 = str_replace('\\', '/', $portfolio->photo3_url);
                    $photoUrl4 = str_replace('\\', '/', $portfolio->photo4_url);
                    @endphp
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
                                <div class="bg-center bg-cover bg-no-repeat position-relative" style="background-image: url('{{ asset($photoUrl1) }}')">
                                    <div class="position-absolute top-0 start-0 end-0 bottom-0 bg-black bg-opacity-40"></div>
                                    <div class="container position-relative">
                                        <div class="row min-vh-75 align-items-center justify-content-center section">
                                            <div class="col-lg-9 text-center">
                                                <h1 class="display-3 text-white mb-4"> {{ $portfolio->title1}}
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-center bg-cover bg-no-repeat position-relative" style="background-image: url('{{ asset($photoUrl2) }}')">
                                    <div class="position-absolute top-0 start-0 end-0 bottom-0 bg-black bg-opacity-40"></div>
                                    <div class="container position-relative">
                                        <div class="row min-vh-75 align-items-center justify-content-center section">
                                            <div class="col-lg-9 text-center">

                                                <h1 class="display-3 text-white mb-4"> {{ $portfolio->title2}}
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="bg-center bg-cover bg-no-repeat position-relative" style="background-image: url('{{ asset($photoUrl3) }}')">
                                    <div class="position-absolute top-0 start-0 end-0 bottom-0 bg-black bg-opacity-40"></div>
                                    <div class="container position-relative">
                                        <div class="row min-vh-75 align-items-center justify-content-center section">
                                            <div class="col-lg-9 text-center">
                                                <h1 class="display-3 text-white mb-4"> {{ $portfolio->title3}}
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="bg-center bg-cover bg-no-repeat position-relative" style="background-image: url('{{ asset($photoUrl4) }}')">
                                    <div class="position-absolute top-0 start-0 end-0 bottom-0 bg-black bg-opacity-40"></div>
                                    <div class="container position-relative">
                                        <div class="row min-vh-75 align-items-center justify-content-center section">
                                            <div class="col-lg-9 text-center">
                                                <h1 class="display-3 text-white mb-4"> {{ $portfolio->title4}}
                                                </h1>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-arrow-style-02 me-3 swiper-next swiper-next-01"><i class="bi bi-chevron-right"></i></div>
                        <div class="swiper-arrow-style-02 ms-3 swiper-prev swiper-prev-01"><i class="bi bi-chevron-left"></i></div>
                    </div><!-- End Section --><!-- Section -->

                    @endforeach
                </div>
                <div>
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                                    <use xlink:href="#check-circle-fill" />
                                </svg>
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            <div class="d-flex justify-content-between mb-4">
                                <h3>Description</h3>
                                <div>
                                    @if($room->IsAvailable == 0 && !auth()->check() )
                                    <button type="button" class="btn btn-danger fw-semibold fs-13px" data-bs-toggle="modal" data-bs-target="#modalLg">
                                        Book This room</button>
                                    @else
                                    <button type="button" class="btn btn-danger" disabled>No Available</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <article class="pt-2">
                        <p>{{ $room->Description }}</p>

                        <div class="row pt-3 pb-5">
                            <div class="col-md-12 my-3">
                                <h3 class="pb-2">Universities around </h3>
                                <p>You can also get access easily around this universities </p>
                                <ul class="list-unstyled m-0 pt-2">
                                    @if ($universities_avs->isNotEmpty())
                                    @foreach ($universities_avs as $university)
                                    <li class="d-flex py-1">
                                        <i class="text-primary bi-check-circle-fill"></i>
                                        <span class="col ps-3">{{ $university->name }}</span>
                                    </li>
                                    @endforeach
                                    @endif
                                </ul>

                            </div>

                        </div>
                        
                    </article>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                <div class="bg-gray-100 p-5">
                    <h5 class="text-primary pb-3">Room information</h5>
                    <div class="pb-3 mb-3 border-bottom">
                        <h6>Room Type</h6>
                        <p class="m-0"> {{ $room->type_room->Name }} </p>
                    </div>
                    <div class="pb-3 mb-3 border-bottom">
                        <h6>Room Rate </h6>
                        <p class="m-0">RM {{ $room->Price}}</p>
                    </div>

                    <div class="pb-3 mb-3 border-bottom">
                        <h6>Rate</h6>
                        <p class="m-0">
                            @for ($i = 1; $i <= 5; $i++) @if ($i <=$room->Rate)
                                <!-- Étoile pleine -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                    <polygon points="12 2 15 8 22 9 17 14 18 21 12 18 6 21 7 14 2 9 9 8 12 2"></polygon>
                                </svg>
                                @else
                                <!-- Étoile vide -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                    <polygon points="12 2 15 8 22 9 17 14 18 21 12 18 6 21 7 14 2 9 9 8 12 2"></polygon>
                                </svg>
                                @endif
                                @endfor
                        </p>
                    </div>

                    <div class="pb-3 mb-3 border-bottom">
                        <h6>Address </h6>
                        <p class="m-0">{{ $room->Address }} - {{ $room->university->name }}</p>
                    </div>

                    <div class="nav"><a class="icon-xs btn btn-dark fs-xs rounded-circle p-0 me-2" href="#"><i class="bi bi-facebook"></i> </a><a class="icon-xs btn btn-dark fs-xs rounded-circle p-0 me-2" href="#"><i class="bi bi-twitter"></i> </a><a class="icon-xs btn btn-dark fs-xs rounded-circle p-0 me-2" href="#"><i class="bi bi-instagram"></i> </a><a class="icon-xs btn btn-dark fs-xs rounded-circle p-0 me-2" href="#"><i class="bi bi-linkedin"></i></a></div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="section overflow-hidden bg-gray-100">
    <div class="container">
        <div class="section-heading">
            <h6 class="sm-title">Rooms also you may like </h6>
            <h2 class="h1">New Rooms Available</h2>
        </div>
        <div class="swiper-hover-arrow">
            <div class="swiper swiper-container swiper-no-scroll" data-swiper-options='{
                              "slidesPerView": 1,
                              "spaceBetween": 24,
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
                                  "slidesPerView": 2.5
                                },
                                "991": {
                                  "slidesPerView": 3
                                },
                                "1150": {
                                  "slidesPerView": 3.5
                                }
                              }
                            }'>
                <div class="swiper-wrapper">
                    @foreach($roomsAround as $room)
                    @php
                    $photoUrlRoom = str_replace('\\', '/', $room->photo_url);
                    @endphp
                    <div class="swiper-slide">
                        <div class="hover-scale hover-opacity">
                            <div class="hover-scale-in rounded-3"><img src="{{ $photoUrlRoom}}" title alt></div>
                            <a href="{{ route('frontend.room_detail', $room->id)}}">
                                <div class="pt-3 text-center position-absolute bottom-0 start-0 end-0 p-3 hover-opacity-in">
                                    <div class="bg-white p-3 text-center rounded-3"><span class="position-absolute justify-content-center top-0 start-0 end-0 fs-sm d-flex"><span class="px-3 py-1 rounded-pill bg-primary text-white">{{ $room->type_room->Name}}</span></span>
                                        <h6 class="h5 pt-3">{{ $room->Title}}</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-arrow-style-02 swiper-prev swiper-prev-02"><i class="bi bi-chevron-left"></i></div>
                <div class="swiper-arrow-style-02 swiper-next swiper-next-02"><i class="bi bi-chevron-right"></i></div>
                <div class="swiper-pagination mt-5 d-none position-relative"></div>
            </div>
        </div>
    </div>
</section><!-- end section -->


<!-- Book rooms -->
<div class="modal fade" id="modalLg" data-bs-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <div class="modal-title fs-5">Book this Room - {{$room->Title }} - {{ $room->type_room->Name}} - {{ $room->university->name}}</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('students.store', $room->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="room_id" value="{{ $room->id ?? '' }}">
                    <div class="mb-3 row">
                        <label for="first_name" class="col-sm-4 col-form-label">First Name *</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                            @error('first_name') <span class="text-danger error">This field is require </span>@enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="LastName" class="col-sm-4 col-form-label">Last Name *</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="LastName" name="last_name" required>
                            @error('last_name') <span class="text-danger error">This field is require </span>@enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputSexe" class="col-sm-4 col-form-label">Gender *</label>
                        <div class="col-sm-8">
                            <select name="gender" id="inputSexe" class="form-control">
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                                <option value="O">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputEmail" class="col-sm-4 col-form-label">Email Address *</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="inputEmail" placeholder="myemail@gmail.com" name="email" value="{{ old('email') }}">
                            @error('Email')
                            <span class="text-danger error">Ce champ est requis</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputphone" class="col-sm-4 col-form-label">Phone *</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="inputphone" name="phone" value="{{ old('phone') }}">
                            @error('phone')
                            <span class="text-danger error">Ce champ est requis</span>
                            @enderror
                            <small>Phone: 011-6000 0000</small>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="address" class="col-sm-4 col-form-label">Address *</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" placeholder="Please enter your address ">
                            @error('address')
                            <span class="text-danger error">Ce champ est requis</span>
                            @enderror
                            <small>Ex: Your city</small>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputuniversity" class="col-sm-4 col-form-label">University *</label>
                        <div class="col-sm-8">
                            <select name="university_id" id="university_id" class="form-control">
                                <option value="" selected disabled>Select</option>
                                @foreach($universities as $university)
                                <option value="{{ $university->id}}">{{ $university->name }}</option>
                                @endforeach
                            </select>
                            <small>University you want to study</small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12 mt-3 d-flex justify-content-between">
                            <div></div>
                            <button type="submit" class="btn btn-danger">Send Request</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>





@endsection