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
                                <h4>Add new complain</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form action="{{ route('complains.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(auth()->user()->isAdmin())
                            <div class="mb-3 row">
                                <label for="CodeZone" class="col-sm-2 col-form-label">Room *</label>
                                <div class="col-sm-10">
                                    <select name="room_id" id="room" class="form-control">
                                        @foreach($rooms as $room)
                                            <option value="{{ $room->id}}">{{ $room->Title }}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>
                            </div>
                            @endif
                            <div class="mb-3 row">
                                <label for="CodeZone" class="col-sm-2 col-form-label">Category *</label>
                                <div class="col-sm-10">
                                    <select name="Category" id="room" class="form-control">
                                        <option value="Electricity">Electricity</option>
                                        <option value="Plumbing">Plumbing</option>
                                        <option value="Fournitures">Fournitures </option>
                                        <option value="Lighting">Lighting </option>
                                        <option value="Kitching">Kitching </option>
                                        <option value="Toillet ">Toillet </option>
                                        <option value="Access Card">Access Card </option>
                                        <option value="Lost Key">Lost Key </option>
                                        <option value="WIFI ">WIFI </option>
                                        <option value="Water Air">Water</option>
                                        <option value="Other">Others </option>
                                       
                                    </select>
                                    
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="CodeZone" class="col-sm-2 col-form-label">Title *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control text-black" id="Title" name="Title" value="{{ old('Title')}}" required>
                                    @error('Title') <span class="text-danger error">This field is require</span>@enderror
                                    <small>Exp: My light in the bathroom no working</small>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="CodeZone" class="col-sm-2 col-form-label">Description *</label>
                                <div class="col-sm-10">
                                    <textarea name="Description" id="" class="form-control"></textarea>
                                    @error('Title') <span class="text-danger error">This field is require</span>@enderror
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