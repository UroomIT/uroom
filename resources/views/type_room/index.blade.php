@extends('layouts.base')
@section('content')
<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <div id="tableCustomBasic" class="col-lg-12 col-12 layout-spacing">
            <div class="widget-header seperator-header layout-top-spacing">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <div class="d-flex justify-content-between mb-4">
                            <h1>List rooms type</h1>
                            <div>
                                <!-- Form Button trigger modal -->
                                <a href="{{ route('type-room.create')}}" class="btn btn-primary">
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
                <div class="widget-content widget-content-area">
                    <table id="zero-config" class="table style-1 dt-table-hover non-hover">
                        <thead>
                            <tr>
                                <th class="" scope="col">Type</th>
                                <th scope="col">Edit</th>
                                <th  scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($type_rooms as $type_room)
                                <tr>
                                    <td class="">{{ $type_room->Name}} </td>
                                    <td>
                                        <a href="{{ route('type-room.edit', $type_room->id) }}" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                <path d="M12 20h9"></path>
                                                <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                            </svg>
                                        </a> 
                                    </td>
                                    <td>
                                        <div class="action-btns">
                                            <form method="POST" action="{{ route('type-room.destroy', $type_room->id) }}">
                                                @csrf
                                                <input type="hidden" name="type_room_id" value="{{ $type_room->id ?? '' }}">
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-xs btn-default show_confirm" data-toggle="tooltip" title='Delete'><i class="fa fa-times-circle"></i></button>
                                            </form>
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
</script>
@endsection