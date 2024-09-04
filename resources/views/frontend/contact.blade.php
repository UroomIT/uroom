@extends('frontend.layouts.base')
@section('content')
        <section class="bg-center bg-cover bg-no-repeat position-relative section" style="background-image: url({{asset('static/frontend/assets/img/home-banner-2.jpg') }})">
            <div class="position-absolute top-0 start-0 end-0 bottom-0 bg-black bg-opacity-80"></div>
            <div class="container position-relative">
                <h2 class="display-3 fw-700 text-white lh-1 mb-4">Contact</h2>
                <p class="text-white">
                    Write to us or give us a call. We will reply to you as soon as possible. But yes, it can take up to 24 hours.
                </p>
            </div>
        </section><!-- End Section --><!-- section -->
        <section class="section bg-gray-100">
            <div class="container">
                <div class="container">
                    <div class="row gy-5">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body p-3 p-lg-5">
                                    <div class="section-heading">
                                        <h2 class="h1">Benefits of working with us</h2>
                                        <p class="m-0 w-lg-60 w-md-80">
                                            Feel Free to ask us, it's will be a great pleasure to help uderstung your question.
                                        </p>
                                        @if (session('success'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                                {{ session('success') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        @endif
                                    </div>
                                    <form action="{{ route('contact.store')}}" method="POST">
                                        @csrf
                                        <div class="row gy-4">
                                            <div class="col-md-6">
                                                <div class="form-group"><label class="form-label">Full Name *</label> 
                                                    <input type="text" class="form-control" placeholder="Martin Luthar" name="full_name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Your Email *</label> 
                                                    <input type="text" class="form-control" placeholder="info@domain.com" name="email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><label class="form-label">Subject</label> 
                                                    <input type="text" class="form-control" placeholder="Web design" name="subject" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><label class="form-label">Phone</label> 
                                                    <input type="text" class="form-control" placeholder="+014 85652355" name="phone" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group"><label class="form-label">How Can We Help You?</label> 
                                                    <textarea class="form-control" rows="5" name="description" placeholder="Hello, There! " aria-label="How'd you hear about Front?" required="" data-msg="Please enter an answer."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 p-15px-t">
                                                <button type="submit" class="btn btn-danger">Submit your question</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 ps-lg-8">
                            <div class="card h-100">
                                <div class="card-body p-3 p-lg-4">
                                    <div class="fs-lg mb-3">Write to us or give us a call. We will reply to you as soon as possible. But yes, it can take up to 24 hours.

                                    </div><p class="mb-5">We are open from <strong>9am — 5pm</strong> business days.</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="icon-sm bg-primary rounded-circle text-white"><i class="fas fa-envelope"></i></div>
                                        <div class="col ps-3">{{ $email->Email }}</div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="icon-sm bg-primary rounded-circle text-white"><i class="fas fa-phone-alt"></i></div>
                                        <div class="col ps-3">{{ $phone->Phone }}</div>
                                    </div><div class="d-flex mb-3">
                                        <div class="icon-sm bg-primary rounded-circle text-white"><i class="fas fa-map-signs"></i></div>
                                        <div class="col ps-3">153 Williamson Plaza, 09514 United States</div>
                                    </div><h6 class="pt-3 pb-2">Follow Us</h6>
                                    <div class="nav"><a class="btn btn-primary-soft icon-sm p-0 me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                         <a class="btn btn-primary-soft icon-sm p-0 me-2" href="#"><i class="fab fa-twitter"></i></a> 
                                         <a class="btn btn-primary-soft icon-sm p-0 me-2" href="#"><i class="fab fa-linkedin-in"></i></a> 
                                         <a class="btn btn-primary-soft icon-sm p-0 me-2" href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    <div class="p-2 card card-body mt-5">
                                        <div class="ratio ratio-21x9">
                                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3151.840107317064!2d144.955925!3d-37.817214!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1520156366883" allowfullscreen=""></iframe> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- end section -->












@endsection