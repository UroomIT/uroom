@extends('layouts.base')
@section('content')
<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Users</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $user->first_name}} {{ $user->last_name}}</li>

                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->
        <div class="account-settings-container layout-top-spacing">
            <div class="account-content">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <h2>Parameters</h2>

                        <ul class="nav nav-pills" id="animateLine" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="animated-underline-home-tab" data-bs-toggle="tab" href="#animated-underline-home" role="tab" aria-controls="animated-underline-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg> My personal information</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="animated-underline-profile-tab" data-bs-toggle="tab" href="#animated-underline-profile" role="tab" aria-controls="animated-underline-profile" aria-selected="false" tabindex="-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    Update password</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="animated-underline-preferences-tab" data-bs-toggle="tab" href="#animated-underline-preferences" role="tab" aria-controls="animated-underline-preferences" aria-selected="false" tabindex="-1">
                                    <!-- Use SVG code directly -->
                                    <i class="fa fa-cogs fa-1x"></i>
                                    Payment Historic</button>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="tab-content" id="animateLineContent-4">
                    <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel" aria-labelledby="animated-underline-home-tab">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <form  method="POST" action="{{ route('user.update', $user->id)}}" enctype="multipart/form-data"  class="section general-info">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" value="{{ $user->id }}" name="user_id">
                                    <div class="info">
                                        <!-- <h6 class="">General Information</h6> -->
                                        <div class="row">
                                            <div class="col-lg-11 mx-auto">
                                                <div class="row">
                                                    <div class="col-xl-2 col-lg-12 col-md-4">
                                                        <div class="profile-image  mt-4 pe-md-4">
                                                            <img src="{{ $user->photo_url }}" width="30%">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                        <div class="form">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="Nom">First Name</label>
                                                                        <input type="text" class="form-control mb-3" id="Nom" name="first_name" value="{{ $user->first_name}}">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="profession">Last Name</label>
                                                                        <input type="text" class="form-control mb-3" id="prenom" name="last_name" value="{{ $user->last_name}}">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="Sexe">Gender</label>
                                                                        <select class="form-select mb-3" id="Sexe" name="Sexe">
                                                                            @foreach(['M' => 'Male', 'F' => 'Female'] as $value => $label)
                                                                            <option value="{{ $value }}" {{ old('gender', $user->gender) == $value ? 'selected' : '' }}>
                                                                                {{ $label }}
                                                                            </option>
                                                                            @endforeach

                                                                        </select>
                                                                    </div>
                                                                </div>

                                                              
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="Email">Email</label>
                                                                        <input type="text" class="form-control mb-3" id="Email" name="email" value="{{ $user->email }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="Photo">Photo</label>
                                                                        <input type="file" class="form-control mb-3" id="Photo" name="Photo">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 mt-1">
                                                                    <div class="form-group text-end">
                                                                        <button type="submit" class="btn btn-secondary">Update profile</button>
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
                    <div class="tab-pane fade" id="animated-underline-profile" role="tabpanel" aria-labelledby="animated-underline-profile-tab">
                        <div class="row">
                            <div class="col-xl-6 col-lg-12 col-md-12 mx-auto layout-spacing ">
                                <div class="section general-info payment-info ">
                                    <div class="info">
                                        <h6 class="">Edit <span class="text-success">the password of this user</span> </h6>
                                        <form method="POST" action="{{ route('user.update_password', $user->id)}}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" value="{{ $user->id }}" name="user_id">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <div class="form-group">
                                                        <label for="Nom">New password</label>
                                                        <input type="password" class="form-control" id="MotDePasse" name="password" required>
                                                        @error('MotDePasse') <span class="text-danger error">Ce champ est requis et doit comporter minimum 2 caractères</span>@enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-12 mt-3">
                                                    <div class="form-group">
                                                        <label for="Nom">Confirm Password</label>
                                                        <input type="password" class="form-control" placeholder="confirm password" name="confirmationPassword" id="confirmationMotDePasse" aria-describedby="passwordHelpBlock" autocomplete="off" onblur="validerMotDePasse()" required>
                                                        <span class="text-danger error" id="erreurMotDePasse"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mt-3">
                                                <div class="form-group text-end">
                                                    <button type="submit" class="btn btn-secondary">Update password</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="animated-underline-preferences" role="tabpanel" aria-labelledby="animated-underline-preferences-tab">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <div class="section general-info">
                                    <div class="info">
                                        <h6 class="">Choose Theme</h6>
                                        <div class="d-sm-flex justify-content-around">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    <img class="ms-3" width="100" height="68" alt="settings-dark" src="../src/assets/img/settings-light.svg">
                                                </label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    <img class="ms-3" width="100" height="68" alt="settings-light" src="../src/assets/img/settings-dark.svg">
                                                </label>
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

@endsection
