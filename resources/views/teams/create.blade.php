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
                                <h4>Add new member</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form action="{{ route('teams.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-2 col-form-label">Name *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control text-black" id="name" name="name" value="{{ old('name')}}" required>
                                    @error('name') <span class="text-danger error">This field is require</span>@enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-2 col-form-label">Fonction *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control text-black" id="fonction" name="fonction" value="{{ old('fonction')}}" required>
                                    @error('fonction') <span class="text-danger error">This field is require</span>@enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-2 col-form-label">Email *</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control text-black" id="email" name="email" value="{{ old('email')}}" required>
                                    @error('email') <span class="text-danger error">This field is require</span>@enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="slogan" class="col-sm-2 col-form-label">Phone *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control text-black" id="phone" name="phone" value="{{ old('phone')}}" required>
                                    @error('phone') <span class="text-danger error">This field is require</span>@enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="logo" class="col-sm-2 col-form-label">Photo *</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="photo" accept=".jpg, .jpeg, .png, .svg"  name="photo">
                                    <span class="text-danger" id="erreurImage"></span>
                                    <small>Be sure the extension of the image is: .jpg,.jpeg,.png,svg</small>
                                    @error('photo') <span class="text-danger error">This field is require</span>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-2 mt-3">
                                    <a href="{{ URL::previous() }}" class="btn btn-danger">Reset</a>
                                    <button type="submit" class="btn btn-dark">Add</button>
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