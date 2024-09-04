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
                                <h4>Add New Room</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form action="{{ route('rooms.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label for="RoomNumber" class="col-sm-2 col-form-label">Room Number *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control text-black" id="RoomNumber" name="RoomNumber" value="{{ $RoomNumber }}" readonly>
                                    @error('RoomNumber') <span class="text-danger error">This field is required</span>@enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="Title" class="col-sm-2 col-form-label">Title *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Title" name="Title" value="{{ old('Title') }}" placeholder="The title of the room" required>
                                    <small>Exp: Block C-9-10 </small>
                                    @error('Title') <span class="text-danger error">This field is required</span>@enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputSexe" class="col-sm-2 col-form-label">Gender </label>
                                <div class="col-sm-10">
                                    <select name="gender" id="inputSexe" class="form-control">
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="Pseudo" class="col-sm-2 col-form-label">Type Room *</label>
                                <div class="col-sm-10">
                                    <select name="typeRoom" id="typeRoom" class="form-control">
                                        <option value="" selected disabled>Select</option>
                                        @foreach($typeRooms as $typeRoom)
                                        <option value="{{ $typeRoom->id}}">{{ $typeRoom->Name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="university_id" class="col-sm-2 col-form-label">University Name *</label>
                                <div class="col-sm-10">
                                    <select name="university_id" id="university_id" class="form-control">
                                        <option value="" selected disabled>Select</option>
                                        @foreach($universities as $university)
                                        <option value="{{ $university->id}}">{{ $university->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="logo_university" class="col-sm-2 col-form-label">Uniersity Logo *</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="logo_university" accept=".jpg, .jpeg, .png, .svg"  name="logo_university">
                                    <span class="text-danger" id="erreurImage"></span>
                                    <small>Be sure the extension of the image is: .jpg,.jpeg,.png,svg</small>
                                    @error('logo_university') <span class="text-danger error">This field is require</span>@enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="Address" class="col-sm-2 col-form-label">Address *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Address" name="Address" value="{{ old('Address') }}" required>
                                    @error('Address') <span class="text-danger error">This field is required</span>@enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="Price" class="col-sm-2 col-form-label">Price (RM) *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Price" name="Price" value="{{ old('Price') }}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="Photo" class="col-sm-2 col-form-label">Photo *</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="Photo" accept=".jpg, .jpeg, .png, .svg" name="Photo" onchange="validerImage()">
                                    <span class="text-danger" id="erreurImage"></span>
                                    <small>Be sure the extension of the image is: .jpg,.jpeg,.png,svg</small>
                                    @error('Photo') <span class="text-danger error">This field is require</span>@enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="selectVehicules" class="col-sm-2 col-form-label">Universities around: </label>
                                <div class="col-sm-10">
                                    @foreach($universities as $university)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="universities[]" value="{{ $university->id }}" id="univ_{{ $university->id }}">
                                            <label class="form-check-label" for="univ_{{ $university->id }}">{{ $university->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
 
                            <div class="mb-3 row">
                                <label for="Pseudo" class="col-sm-2 col-form-label">Description *</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="Description" name="Description"> </textarea>
                                    <small>Description about the house</small>
                                    @error('Pseudo') <span class="text-danger error">This field is require</span>@enderror
                                </div>
                            </div>

                             
                             <div class="mb-3 row">
                                <label for="Pseudo" class="col-sm-2 col-form-label">Rate (<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                        <polygon points="12 2 15 8 22 9 17 14 18 21 12 18 6 21 7 14 2 9 9 8 12 2"></polygon>
                                        </svg>)</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control mb-3" id="Rate" name="Rate" min="0" max="5">
                                    <small>You can ranked the room in 0 - 5</small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-2 mt-3">
                                    <a href="{{ URL::previous() }}" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-dark">Add Now</button>
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