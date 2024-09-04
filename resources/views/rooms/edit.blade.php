@extends('layouts.base')
@section('content')
<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <div class="d-flex align-items-center layout-top-spacing">
            <div>
                <a href="{{ route('rooms.index')}}"><i class="fa fa-arrow-circle-left"></i> List Rooms </a>
            </div>
        </div>
        <div class="row">
            <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row layout-spacing layout-top-spacing">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h2>Edit Room: {{ $room->Title }} </h2>
                                <p><b>Room Number:</b>{{ $room->RoomNumber}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form action="{{ route('rooms.update', $room->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 row">
                                <label for="Title" class="col-sm-2 col-form-label">Title *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Title" name="Title" value="{{ $room->Title}}" required>
                                    @error('Title') <span class="text-danger error">This field is required</span>@enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="Title" class="col-sm-2 col-form-label">Gender *</label>
                                <div class="col-sm-10">
                                    <select class="form-select mb-3" id="gender" name="gender">
                                        @foreach(['M' => 'Male', 'F' => 'Female'] as $value => $label)
                                        <option value="{{ $value }}" {{ old('gender', $room->gender) == $value ? 'selected' : '' }}>
                                            {{ $label }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                           
                            <div class="mb-3 row">
                                <label for="Pseudo" class="col-sm-2 col-form-label">Type Room *</label>
                                <div class="col-sm-10">
                                    <select name="typeRoom" id="typeRoom" class="form-control">
                                        @foreach($typeRooms as $typeRoom)
                                        <option value="{{ $typeRoom->id}}" @if($room->type_room_id === $typeRoom->id || old('type_room_id') === $room->id) 'selected' @endif>{{ $typeRoom->Name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="university_id" class="col-sm-2 col-form-label">University Name *</label>
                                <div class="col-sm-10">
                                    <select name="university_id" id="university_id" class="form-control">
                                        @foreach($universities as $university)
                                        <option value="{{ $university->id}}" @if($room->university_id === $university->id || old('university_id') === $room->id) 'selected' @endif>{{ $university->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="logo_university" class="col-sm-2 col-form-label">Uniersity Logo *</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="logo_university" accept=".jpg, .jpeg, .png, .svg" name="logo_university" onchange="validerImage()">
                                    <span class="text-danger" id="erreurImage"></span>
                                    @error('logo_university') <span class="text-danger error">This field is require</span>@enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="Address" class="col-sm-2 col-form-label">Address </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Address" name="Address" value="{{ $room->Address }}" required>
                                    @error('Address') <span class="text-danger error">This field is required</span>@enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="Price" class="col-sm-2 col-form-label">Price </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Price" name="Price" value="{{ $room->Price }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="Photo" class="col-sm-2 col-form-label">Photo </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="Photo" accept=".jpg, .jpeg, .png, .svg" name="Photo" onchange="validerImage()">
                                    <span class="text-danger" id="erreurImage"></span>
                                    <small>Be sure the extension of the image is: .jpg,.jpeg,.png,svg</small>
                                    @error('Photo') <span class="text-danger error">This field is require</span>@enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="Pseudo" class="col-sm-2 col-form-label">Description </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="Description" name="Description"> {{ $room->Description }} </textarea>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="Pseudo" class="col-sm-2 col-form-label">Rate (<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                            <polygon points="12 2 15 8 22 9 17 14 18 21 12 18 6 21 7 14 2 9 9 8 12 2"></polygon>
                                        </svg>) </label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control mb-3" id="Rate" name="Rate" min="0" max="5" value="{{ $room->Rate }}">
                                    <small>You can ranked the room in 0 - 5</small>
                                  
                                </div>
                            </div>

                                                       <div class="form-group row">
                                <div class="col-sm-10 offset-sm-2 mt-3">
                                    <a href="{{ URL::previous() }}" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-dark">Update Now</button>
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