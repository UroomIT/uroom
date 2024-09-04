@extends('layouts.base')
@section('content')
<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <div class="row layout-spacing ">
            <!-- Content -->
            <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
                <div class="user-profile">
                    <div class="widget-content widget-content-area">
                        <div class="d-flex justify-content-between">
                            <h3 class="text-center">My Profil</h3>
                        </div>
                        <div class="text-center user-info">
                            @if(auth()->check() && auth()->user()->Photo)
                            <img src="{{ auth()->user()->photo_url }}" alt="avatar" width="30%">
                            @else
                                <span class="menu-img-bg"><i class="fa fa-user fa-2x"></i></span>
                                 {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
                            @endif
                            <p class="">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</p>
                        </div>
                        <div class="user-info-list">

                            <div class="">
                                <ul class="contacts-block list-unstyled">
                                    <li class="contacts-block__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee me-3">
                                            <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                                            <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                                            <line x1="6" y1="1" x2="6" y2="4"></line>
                                            <line x1="10" y1="1" x2="10" y2="4"></line>
                                            <line x1="14" y1="1" x2="14" y2="4"></line>
                                        </svg> {{ auth()->user()->role->name }}
                                    </li>
                                    <li class="contacts-block__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar me-3">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg>{{ auth()->user()->first_name }}{{ auth()->user()->last_name }}
                                    </li>
                                    
                                    <li class="contacts-block__item">
                                        <a href="mailto:example@mail.com"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail me-3">
                                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                                <polyline points="22,6 12,13 2,6"></polyline>
                                            </svg>{{ auth()->user()->email }}</a>
                                    </li>
                                    <li class="contacts-block__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone me-3">
                                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                        </svg> {{ auth()->user()->phone }}
                                    </li>
                                </ul>

                                <ul class="list-inline mt-4">
                                    <li class="list-inline-item mb-0">
                                        <a class="btn btn-info btn-md" href="{{ route('update.password',auth()->user()->id )}}">
                                           Update my password
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">

                <div class="usr-tasks ">
                    <div class="widget-content widget-content-area">
                        <h3 class="">Update your profile</h3>
                        <div class="table-responsive">
                            <form  method="POST" action="{{ route('update.profile', auth()->user()->id)  }}" enctype="multipart/form-data"  class="section general-info">
                                @csrf
                                @method('PUT')
                                <div class="info">
                                    <!-- <h6 class="">General Information</h6> -->
                                    <div class="row">
                                        <div class="col-lg-12 mx-auto">
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                    <div class="form">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="Nom">First Name</label>
                                                                    <input type="text" class="form-control mb-3" id="Nom" name="first_name" value="{{ auth()->user()->first_name}}">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="profession">Last Name</label>
                                                                    <input type="text" class="form-control mb-3" id="prenom" name="last_name" value="{{ auth()->user()->last_name}}">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="Sexe">Gender</label>
                                                                    <select class="form-select mb-3" id="gender" name="gender">
                                                                        @foreach(['M' => 'Male', 'F' => 'Female'] as $value => $label)
                                                                        <option value="{{ $value }}" {{ old('Gender', auth()->user()->gender) == $value ? 'selected' : '' }}>
                                                                            {{ $label }}
                                                                        </option>
                                                                        @endforeach

                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="phone">Email</label>
                                                                    <input type="text" class="form-control mb-3" id="email" name="email" value="{{ auth()->user()->email}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="phone">Phone</label>
                                                                    <input type="text" class="form-control mb-3" id="phone" name="phone" value="{{ auth()->user()->phone}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="Photo">Photo</label>
                                                                    <input type="file" class="form-control mb-3" id="Photo" name="Photo">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mt-1">
                                                                <div class="form-group text-end">
                                                                    <button type="submit" class="btn btn-secondary">Update my profile</button>
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

    </div>
</div>
@endsection