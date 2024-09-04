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
                                <h4>Update your password</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form action="{{ route('updatePasswordConnectedUser', $user->id)}}" method="POST" enctype="multipart/form-data" onsubmit="return ValiderFormulaire()">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 row">
                                <label for="CodeZone" class="col-sm-4 col-form-label">New Password *</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control text-black" id="motDePasse" name="password"  required>
                                    <span class="text-danger error" id="erreurMotDePasse"></span>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="NomZone" class="col-sm-4 col-form-label">Confirm Password *</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="confirmationMotDePasse" name="confirmpassword" required>
                                    <span class="text-danger error" id="ConfirmationMotDePasse"></span>
                                    
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-2 mt-3">
                                    <a href="{{ URL::previous() }}" class="btn btn-danger">Cancel </a>
                                    <button type="submit" class="btn btn-dark">Update now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection