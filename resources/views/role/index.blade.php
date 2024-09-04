@extends('layouts.base')
@section('content')
<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <div id="tableCustomBasic" class="col-lg-12 col-12 layout-spacing">
            <div class="widget-header seperator-header layout-top-spacing">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <div class="d-flex justify-content-between mb-4">
                            <h1>List Role</h1>
                            <div>
                                <a href="{{ route('role.create')}}" class="btn btn-primary">
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
                                <th class="" scope="col">Role</th>
                                <th class="">Users</th>
                                <th class="">Permissions</th>
                                <th>Action</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <td class="">{{ $role->name }} </td>
                                <td class=""> 
                                    {{ $role->users->count()}}
                                </td>
                                <td class=""> {{ $role->permissions->count()  }}</td>
                               
                                <td class="">
                                    <a href="{{ route('role.edit', $role->id) }}" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('role.destroy', $role->id) }}">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-xs btn-default show_confirm" data-toggle="tooltip" title='Delete'><i class="fa fa-times-circle"></i></button>
                                    </form>
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
        var form = $(this).closest("form");
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
</script>
@endsection