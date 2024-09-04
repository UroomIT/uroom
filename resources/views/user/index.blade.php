@extends('layouts.base')
@section('content')
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <div id="tableCustomBasic" class="col-lg-12 col-12 layout-spacing">
                <div class="widget-header seperator-header layout-top-spacing">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <div class="d-flex justify-content-between mb-4">
                                <h1>List users account</h1>
                                <div>
                                    <a href="{{ route('user.create')}}" class="btn btn-primary">
                                        <i class="fa fa-plus"></i> New
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">
                        <table id="zero-config" class="table style-1 dt-table-hover non-hover">
                            <thead>
                                <tr>
                                    <th class="text-center" scope="col">Name</th>
                                    <th class="text-center" scope="col">Role</th>
                                    <th class="text-center" scope="col">Email</th>
                                    <th class="text-center" scope="col">State</th>
                                    <th class="text-center" scope="col">Action</th>
                                    <th class="text-center" scope="col">Details</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td class="">{{ $user->first_name}}</td>
                                    <td class="text-center">
                                        <span class="badge badge-light-success bg-opacity-15 px-2 py-6px rounded fs-12px d-inline-flex align-items-center"> {{ $user->role->name }}</span>
                                    </td>
                                    <td class="">{{ $user->email}}</td>
                                    <td class="text-center">
                                        @if($user->State == 0)
                                        <span class="badge badge-light-danger rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i>Deactivate</span>
                                        @else
                                        <span class="badge badge-light-success bg-opacity-15 px-2 py-6px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Activate</span>
                                        @endif
                                    </td>

                                    <td class="text-center">
                                        @if($user->role_id !=  1)
                                        <form action="{{ route('state.update', $user->id) }}" method="GET" id="submit{{ $user->id}}">
                                            @if($user->State == 0)
                                                <button  type="button" data-original-title="Activer" data-toggle="tooltip" data-placement="top" 
                                                onclick="changeAction('{{ $user->id}}')" class="btn btn-success btn-sm">Active</button>
                                            @else
                                                <button  type="button" data-original-title="Activer" data-toggle="tooltip" data-placement="top" 
                                                onclick="changeAction('{{ $user->id}}')" class="btn btn-danger btn-sm">Deactive</button>
                                            @endif
                                        </form>
                                        @endif
                                        
                                    </td>
                                    <td class="align-middle">
                                        <div class="action-btns">
                                            <a href="{{ route('user.show', $user->id) }}" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="View">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
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
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
    $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Etes-vous sûr de vouloir supprimer ?`,
              text: "Cette suppression est definitive de l'application",
              icon: "warning",
              buttons: true,
              buttons: ['Annuler', 'Confirmer'],
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
            title: 'Etes vous sur de vouloir changer ce status',
            text: 'cette action est irreversible',
            icon: 'warning',
            showCancelButton: true,
            buttons: ['Annuler', 'Oui, j\'en suis sur !'],
            dangerMode: true,

        }).then((result) => {
            if(result){
                form.submit();
            }
        })
    }
</script>
@endsection