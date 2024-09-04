@extends('frontend.layouts.base')
@section('content')
<!-- first section -->
<section class="bg-center bg-cover bg-no-repeat position-relative section" style="background-image: url({{asset('static/frontend/assets/img/home-banner-2.jpg') }})">
    <div class="position-absolute top-0 start-0 end-0 bottom-0 bg-black bg-opacity-80"></div>
    <div class="container position-relative">
        <h2 class="display-3 fw-700 text-white lh-1 mb-4">We build, grow and smile together </h2>
        <p class="text-white">
            With our mindset to streamline and 
            ease the student living experience, Helping student to find accommodation is our goal with <b>UrooM</b>


        </p>
    </div>
</section><!-- End Section --><!-- section -->

<!-- Section -->
<section
    class="section">
    <div class="container">
        <div
            class="row gy-2 align-items-center">
            <div class="col-lg-4"><img src="{{asset('static/frontend/assets/img/about-1.png') }}" title alt></div>
            <div class="col-lg-8 ps-lg-10">
                <h2 class="h1 mb-1">We are focus on rental room for students</h2>
                <p>We are dedicated to simplifying the process of finding and renting houses and apartments in Malaysia. Our mission is to connect people with their ideal living spaces quickly and efficiently. Whether you're looking for a cozy apartment in the city or a spacious house in the suburbs, Uroom is here to help you find your perfect home.
                We understand that searching for a rental property can be overwhelming. That’s why we’ve created a user-friendly platform that makes it easy to browse listings, schedule viewings, and secure your next rental. Our team is committed to providing exceptional customer service and support every step of the way.</p>
                <div class="row pt-3">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div
                            class="d-flex p-3 shadow-lg align-items-center">
                            <div
                                class="icon-lg position-relative border border-primary rounded-circle text-primary border-opacity-25"><i
                                    class="bi-laptop display-6"></i> <span
                                    class="icon position-absolute bottom-0 end-0 me-n3 mb-n2 bg-primary bg-opacity-10 rounded-circle"></span></div>
                            <div
                                class="col ps-4">
                                <h5 class="h4 m-0">Our Vision</h5>
                                <p>Our vision is to revolutionize the rental market in Malaysia by offering a seamless and enjoyable experience for renters. We aim to be the most trusted and reliable platform for anyone looking to find their next home. By leveraging technology and innovation,
                                we strive to continuously improve our services and exceed our clients' expectations.
                                </p>
                            </div>
                        </div>
                    </div>
                   
                </div>

            </div>
        </div>
    </div>
</section><!-- End Section -->


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

<!-- our team -->
<div class="section bg-gray-100">
    <div class="container">
        <div class="section-heading text-center">
            <h2 class="h1 m-0">Meet Our Team</h2>
        </div>
        <div  class="row gy-4">
            @foreach($teams as $team)
            @php
                $photoUrl = str_replace('\\', '/', $team->photo_url);
            @endphp
            <div class="col-sm-6 col-lg-4">
                <div class="card">
                    <div class="card-body p-3 p-lg-5 rounded-3 text-center ">
                            <div class="rounded-circle mb-4">
                                <img class="rounded-circle" src="{{ $team->photo_url }}" width="40%">
                            </div>
                        <h5>{{ $team->name }}</h5>

                        <p class="mb-5 text-center">
                            <b>{{ $team->fonction }}</b> 
                        </p>
                        <p class="mb-5 text-center">
                            <i class="fas fa-envelope"></i> <br>
                            {{ $team->email }} </p>
                        <p class="mb-5 text-center">
                            <i class="fas fa-phone"></i> <br>
                            {{ $team->phone }} </p>
                        <!-- <a class="icon-sm btn p-0 btn-outline-primary rounded-circle stretched-link" href="">
                         <i class="bi-chevron-right"></i>
                        </a> -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div><!-- end section -->













@endsection