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
                                <h4>Edit partner : {{ $partner->name}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form action="{{ route('partners.update', $partner->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 row">
                                <label for="CodeZone" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control text-black" id="name" name="name" value="{{ $partner->name}}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="CodeZone" class="col-sm-2 col-form-label">Slogan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control text-black" id="name" name="name" value="{{ $partner->name}}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="CodeZone" class="col-sm-2 col-form-label">Logo</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control text-black" id="logo" name="logo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-2 mt-3">
                                    <a href="{{ URL::previous() }}" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-dark">Edit</button>
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