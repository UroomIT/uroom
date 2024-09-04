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
                                <h4>Modification  {{ $binfo->Email ? 'Email:'.$binfo->Email  : 'Phone: '.$binfo->Phone }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form action="{{ route('basic_information.update', $binfo->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" value="{{ $binfo->id }}" name="val_id">
                            <div class="mb-3 row">
                                <label for="CodeZone" class="col-sm-2 col-form-label">{{ $binfo->Email ? 'Email Address:': 'Phone Number:'}} </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control text-black" id="{{ $binfo->Email ? 'Email': 'Phone' }}" name="{{ $binfo->Email ? 'Email': 'Phone' }}" value="{{ $binfo->Email ? $binfo->Email  : $binfo->Phone }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-2 mt-3">
                                    <a href="{{ URL::previous() }}" class="btn btn-danger">Annuler</a>
                                    <button type="submit" class="btn btn-dark">Modifier la zone</button>
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