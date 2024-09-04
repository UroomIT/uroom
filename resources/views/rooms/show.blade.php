@extends('layouts.base')
@section('content')
<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('rooms.index') }}">Rooms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $room->Title}}</li>

                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->
        <div class="account-settings-container layout-top-spacing mt-10">
            <div class="account-content">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <h2>Room Details</h2>

                        <ul class="nav nav-pills" id="animateLine" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="animated-underline-home-tab" data-bs-toggle="tab" href="#animated-underline-home" role="tab" aria-controls="animated-underline-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg> Room Details </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="animated-underline-profile-tab" data-bs-toggle="tab" href="#animated-underline-profile" role="tab" aria-controls="animated-underline-profile" aria-selected="false" tabindex="-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    Add more details
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="animated-underline-preferences-tab" data-bs-toggle="tab" href="#animated-underline-preferences" role="tab" aria-controls="animated-underline-preferences" aria-selected="false" tabindex="-1">
                                    <!-- Use SVG code directly -->
                                    <i class="fa fa-cogs fa-1x"></i>
                                    Gallery for the room
                                </button>
                            </li>

                            <li class="nav-item" role="whychooseus">
                                <button class="nav-link" id="why-choose-room-tab" data-bs-toggle="tab" href="#why-choose-room-tab" role="tab" aria-controls=why-choose-room-tab" aria-selected="false" tabindex="-1">
                                    <!-- Use SVG code directly -->
                                    <i class="fa fa-cogs fa-1x"></i>
                                    Why chose us?
                                </button>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="tab-content" id="animateLineContent-4">
                    <!-- show information -->
                    <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel" aria-labelledby="animated-underline-home-tab">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <div class="info">
                                    <!-- <h6 class="">General Information</h6> -->
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">
                                                <div class="col-xl-2 col-lg-12 col-md-4">
                                                    <div class="profile-image  mt-4 pe-md-4">
                                                        <img src="{{ $room->photo_url }}" width="100%">
                                                        <p class="mt-4">
                                                          
                                                            @for ($i = 1; $i <= 5; $i++) @if ($i <= $room->Rate) <!-- Étoile pleine -->
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
                                                </div>
                                                <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                    <div class="form">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="Title">Title</label>
                                                                    <input type="text" class="form-control mb-3" id="Title" name="Title" value="{{ $room->Title}}" readonly>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="profession">Room Type</label>
                                                                    <input type="text" class="form-control mb-3" id="prenom" name="Prenom" value="{{ $room->type_room->Name}}" readonly>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="profession">Address</label>
                                                                    <input type="text" class="form-control mb-3" id="Address" name="Address" value="{{ $room->Address}}" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="profession">Price (RM)</label>
                                                                    <input type="number" class="form-control mb-3" id="Price" name="Price" value="{{ $room->Price}}" readonly>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="profession">Description</label>
                                                                    <textarea name="description" id="" class="form-control mb-3" readonly>{{ $room->Description }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- for add images -->
                    <div class="tab-pane fade" id="animated-underline-profile" role="tabpanel" aria-labelledby="animated-underline-profile-tab">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 mx-auto layout-spacing ">
                                <div class="section general-info payment-info ">
                                    <div class="info">
                                        <h6 class="">Add more information about</h6>
                                        <p>You can add more <span class="text-success">details for this room</span></p>
                                        <form method="POST" action="{{ route('portfolio.store')}}" enctype="multipart/form-data" class="section general-info">
                                            @csrf
                                            <input type="hidden" value="{{ $room->id }}" name="room_id">
                                            <div class="info">
                                                <!-- <h6 class="">General Information</h6> -->
                                                <div class="row">
                                                    <div class="col-lg-11 mx-auto">
                                                        <div class="row">
                                                            <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                                <div class="form">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="Photo">Photo 1</label>
                                                                                <input type="file" class="form-control mb-3" id="Photo" name="Photo1">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="title1">Title 1</label>
                                                                                <input type="text" class="form-control mb-3" id="title1" name="title1">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="Photo">Photo 2</label>
                                                                                <input type="file" class="form-control mb-3" id="Photo2" name="Photo2">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="title2">Title 2</label>
                                                                                <input type="text" class="form-control mb-3" id="title2" name="title2">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="Photo">Photo 3</label>
                                                                                <input type="file" class="form-control mb-3" id="Photo2" name="Photo3">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="title3">Title 3</label>
                                                                                <input type="text" class="form-control mb-3" id="title3" name="title3">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="Photo">Photo 4</label>
                                                                                <input type="file" class="form-control mb-3" id="Photo2" name="Photo4">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="title4">Title 4</label>
                                                                                <input type="text" class="form-control mb-3" id="titl4" name="title4">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="Photo">Photo 5</label>
                                                                                <input type="file" class="form-control mb-3" id="Photo5" name="Photo5">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="title4">Title 5</label>
                                                                                <input type="text" class="form-control mb-3" id="titl5" name="title5">
                                                                            </div>
                                                                        </div>
                                                                      
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="Photo">Photo 6</label>
                                                                                <input type="file" class="form-control mb-3" id="Photo6" name="Photo6">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="title4">Title 6</label>
                                                                                <input type="text" class="form-control mb-3" id="titl6" name="title6">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="Photo">Photo 7</label>
                                                                                <input type="file" class="form-control mb-3" id="Photo7" name="Photo7">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="title4">Title 7</label>
                                                                                <input type="text" class="form-control mb-3" id="titl7" name="title7">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="Photo">Photo 8</label>
                                                                                <input type="file" class="form-control mb-3" id="Photo8" name="Photo8">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="title4">Title 8</label>
                                                                                <input type="text" class="form-control mb-3" id="titl8" name="title8">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="Photo">Photo 9</label>
                                                                                <input type="file" class="form-control mb-3" id="Photo9" name="Photo9">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="title4">Title 9</label>
                                                                                <input type="text" class="form-control mb-3" id="titl9" name="title9">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="Photo">Photo 10</label>
                                                                                <input type="file" class="form-control mb-3" id="Photo10" name="Photo10">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="title4">Title 10</label>
                                                                                <input type="text" class="form-control mb-3" id="titl10" name="title10">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 mt-1">
                                                                            <div class="form-group text-end">
                                                                                <button type="submit" class="btn btn-secondary">Update</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- galleries -->
                    <div class="tab-pane fade" id="animated-underline-preferences" role="tabpanel" aria-labelledby="animated-underline-preferences-tab">
                        <div class="row">
                            <div id="card_13" class="col-xxl-12 col-xl-12 col-lg-12  col-md-12 layout-spacing">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-content widget-content-area">
                                        <div class="row">
                                            @foreach($galleries as $gallerie)
                                           
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3">
                                                <a class="card style-7" href="" target="_blank">
                                                    <img src="{{ $gallerie->photo1_url }}" class="card-img-top" alt="...">
                                                    
                                                </a>
                                                <h4 class="text-center">{{ $gallerie->title1 }}</h4>

                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 mx-auto">
                                                <a class="card style-7" href="" target="_blank">
                                                    <img src="{{ $gallerie->photo2_url }}" class="card-img-top" alt="...">
                                                    
                                                </a>
                                                <h4 class="text-center">{{ $gallerie->title2 }}</h4>

                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3">
                                                <a class="card style-7" href="" target="_blank">
                                                    <img src="{{ $gallerie->photo3_url }}" class="card-img-top" alt="...">
                                                   
                                                </a>
                                                <h4 class="text-center">{{ $gallerie->title3 }}</h4>

                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3">
                                                <a class="card style-7" href="" target="_blank">
                                                    <img src="{{ $gallerie->photo4_url }}" class="card-img-top" alt="...">
                                                </a>
                                                <h4 class="text-center">{{ $gallerie->title4 }}</h4>
                                                
                                            </div>

                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3">
                                                <a class="card style-7" href="" target="_blank">
                                                    <img src="{{ $gallerie->photo5_url }}" class="card-img-top" alt="...">
                                                </a>
                                                <h4 class="text-center">{{ $gallerie->title5 }}</h4>
                                            </div>

                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3">
                                                <a class="card style-7" href="" target="_blank">
                                                    <img src="{{ $gallerie->photo6_url }}" class="card-img-top" alt="...">
                                                </a>
                                                <h4 class="text-center">{{ $gallerie->title6 }}</h4>
                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3">
                                                <a class="card style-7" href="" target="_blank">
                                                    <img src="{{ $gallerie->photo7_url }}" class="card-img-top" alt="...">
                                                </a>
                                                <h4 class="text-center">{{ $gallerie->title7 }}</h4>
                                                
                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3">
                                                <a class="card style-7" href="" target="_blank">
                                                    <img src="{{ $gallerie->photo8_url }}" class="card-img-top" alt="...">
                                                </a>
                                                <h4 class="text-center">{{ $gallerie->title8 }}</h4>
                                                
                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3">
                                                <a class="card style-7" href="" target="_blank">
                                                    <img src="{{ $gallerie->photo9_url }}" class="card-img-top" alt="...">
                                                </a>
                                                <h4 class="text-center">{{ $gallerie->title9 }}</h4>
                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3">
                                                <a class="card style-7" href="" target="_blank">
                                                    <img src="{{ $gallerie->photo10_url }}" class="card-img-top" alt="...">
                                                </a>
                                                <h4 class="text-center">{{ $gallerie->title10 }}</h4>
                                            </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>

                    <!-- why choose this room -->
                    <div class="tab-pane fade" id="why-choose-room-tab" role="tabpanel" aria-labelledby="why-choose-room-tab">
                        <div class="row">
                            <div id="card_13" class="col-xxl-12 col-xl-12 col-lg-12  col-md-12 layout-spacing">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-content widget-content-area">
                                        <div class="row">
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>

        </div>

    </div>

</div>

@endsection