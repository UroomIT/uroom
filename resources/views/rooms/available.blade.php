@extends('layouts.base')
@section('content')
<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <div id="tableCustomBasic" class="col-lg-12 col-12 layout-spacing">
            <div class="widget-header seperator-header layout-top-spacing">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <div class="d-flex justify-content-between mb-4">
                            <h1>List  Rooms Available </h1>
                            <div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area table-responsive">
                    <table id="zero-config" class="table  style-1 dt-table-hover non-hover">
                        <thead>
                            <tr>
                                <th class="" scope="col">Room No.</th>
                                <th class="" scope="col">Title</th>
                                <th class="" scope="col">Type Room</th>
                                <th class="" scope="col">University</th>
                                <th class="" scope="col">Student Name</th>
                                <th scope="col">View</th>
                            </tr> 
                        </thead>
                        <tbody>
                            @foreach($rooms as $room)
                                <tr>
                                    <td>{{ $room->RoomNumber }}</td>
                                    <td>{{ $room->Title }}</td>
                                    <td>{{ $room->type_room->Name }}</td>
                                    <td>{{ $room->university }}</td>
                                    <td>{{ $room->student->first_name }}</td>
                                   
                                    <td class="align-middle">
                                        <div class="action-btns">
                                            <a href="{{ route('rooms.show', $room->id) }}" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="View">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                            </a>
                                            <a href="{{ route('rooms.edit', $room->id) }}" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                    <path d="M12 20h9"></path>
                                                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                       
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>











@endsection