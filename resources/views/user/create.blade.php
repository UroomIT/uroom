@extends('layouts.base')
@section('content')
<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <div class="row">
            <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Add user account</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label for="inputRCCM" class="col-sm-2 col-form-label">First Name *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputRCCM" name="first_name" value="{{ old('first_name') }}">
                                    @error('first_name')
                                    <span class="text-danger error">This field is required</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputRCCM" class="col-sm-2 col-form-label">Last Name *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputRCCM" name="last_name" value="{{ old('last_name') }}">
                                    @error('last_name')
                                    <span class="text-danger error">This field is required</span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="mb-3 row">
                                <label for="inputSexe" class="col-sm-2 col-form-label">Gender </label>
                                <div class="col-sm-10">
                                    <select name="gender" id="inputSexe" class="form-control">
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                        <option value="O">Other</option>
                                    </select>

                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email Address *</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" name="email" value="{{ old('Email') }}">
                                    @error('Email')
                                    <span class="text-danger error">This field is required</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="phone" class="col-sm-2 col-form-label">Phone *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('Email') }}">
                                    @error('phone')
                                    <span class="text-danger error">This field is required</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="MotDePasse" class="col-sm-2 col-form-label">Password *</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="MotDePasse" name="password" required>
                                    @error('MotDePasse') <span class="text-danger error">This field is required and minimum 2 characters</span>@enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="confirmationMotDePasse" class="col-sm-2 col-form-label">Confirmation *</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" placeholder="confirmer votre mot de passe" name="confirmationMotDePasse" id="confirmationMotDePasse" aria-describedby="passwordHelpBlock" autocomplete="off" onblur="validerMotDePasse()" required>
                                    <span class="text-danger error" id="erreurMotDePasse"></span>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="inputPhoto" class="col-sm-2 col-form-label">Photo *</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="inputPhoto" name="Photo">
                                    @error('Photo')
                                    <span class="text-danger error">This field is required</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="numero" class="col-sm-2 col-form-label">Role *</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="validationSelectInvalid" name="role">
                                        @foreach($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-2 mt-3">
                                    <a href="{{ URL::previous() }}" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-dark">Add</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection