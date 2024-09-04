@extends('layouts.base')
@section('content')
<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <div id="tableCustomBasic" class="col-lg-12 col-12 layout-spacing">
            <div class="widget-header seperator-header layout-top-spacing">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <div class="d-flex justify-content-between mb-4">
                            <h1>List All Rooms</h1>
                            <div>
                                <!-- Form Button trigger modal -->
                                <a href="{{ route('rooms.create')}}" class="btn btn-primary">
                                    <i class="fa fa-plus"></i> New
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa fa-times-circle fa-lg" style="color:white"></i></button>
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa fa-times-circle fa-lg" style="color:white"></i></button>
                </div>
            @endif

            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area table-responsive">
                    <table id="zero-config" class="table  style-1 dt-table-hover non-hover">
                        <thead>
                            <tr>
                                <th class="" scope="col">Room No.</th>
                                <th class="" scope="col">Title</th>
                                <th class="" scope="col">Type Room</th>
                                <th class="" scope="col">University</th>
                                <th class="" scope="col">Price (RM)</th>
                                <th  scope="col">Status</th>
                                <th scope="col">View</th>
                            </tr> 
                        </thead>
                        <tbody>
                            @foreach($rooms as $room)
                                <tr>
                                    <td>{{ $room->RoomNumber }}</td>
                                    <td>{{ $room->Title }}</td>
                                    <td>{{ $room->type_room->Name }}</td>
                                    <td>{{ $room->university->name }}</td>
                                    <td>{{ $room->Price }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('change_room_state', $room->id) }}" method="GET" id="submit{{ $room->id}}">
                                            @if($room->IsOnline === 1)
                                                <button  type="button" data-original-title="Activer" data-toggle="tooltip" data-placement="top" 
                                                onclick="changeAction('{{ $room->id}}')" class="btn btn-success btn-sm">Online </button>
                                            @else
                                                <button  type="button" data-original-title="Activer" data-toggle="tooltip" data-placement="top" 
                                                onclick="changeAction('{{ $room->id}}')" class="btn btn-danger btn-sm">Offline</button>
                                            @endif
                                        </form>
                                    </td>
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
                                        <!-- <form method="POST" action="{{ route('rooms.destroy', $room->id) }}">
                                            @csrf
                                            <input type="hidden" name="room_id" value="{{ $room->id ?? '' }}">
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-xs btn-default show_confirm" data-toggle="tooltip" title='Delete'><i class="fa fa-times-circle"></i></button>
                                        </form> -->
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

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
    $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure to delete ?`,
              text: "You will delete definitively to the application",
              icon: "warning",
              buttons: true,
              buttons: ['Cancel', 'Confirm'],
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });


    function changeAction(id) {
        let form = document.querySelector(`#submit${id}`);
        swal({
            title: 'Are you sure to change this state',
            text: 'Are you sure ?',
            icon: 'warning',
            showCancelButton: true,
            buttons: ['Cancel', 'Yes, I am Sure !'],
            dangerMode: true,

        }).then((result) => {
            if(result){
                form.submit();
            }
        })
    }
</script>
@endsection