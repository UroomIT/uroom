@extends('layouts.base')
@section('content')
<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <div id="tableCustomBasic" class="col-lg-12 col-12 layout-spacing">
            <div class="widget-header seperator-header layout-top-spacing">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <div class="d-flex justify-content-between mb-4">
                            <h1>List contact</h1>
                            
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
           
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area table-responsive">
                    <table  class="table style-1 dt-table-hover non-hover">
                        <thead>
                            <tr>
                                <th class="" scope="col">Full name</th>
                                <th class="" scope="col">email</th>
                                <th class="" scope="col">Phone</th>
                                <th  scope="col">State(Resolve/No)</th>
                                <th scope="col">View</th>
                            </tr> 
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->full_name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('change_contact_state', $contact->id)}}" method="GET" id="submit{{ $contact->id}}">
                                            @if($contact->state === 1)
                                                <button  type="button" data-original-title="Activer" data-toggle="tooltip" data-placement="top" 
                                                onclick="changeAction('{{ $contact->id}}')" class="btn btn-success btn-sm">Resolve</button>
                                            @else
                                                <button  type="button" data-original-title="Activer" data-toggle="tooltip" data-placement="top" 
                                                onclick="changeAction('{{ $contact->id}}')" class="btn btn-danger btn-sm">No resolve</button>
                                            @endif
                                        </form>
                                    </td>
                                    <td class="align-middle">
                                        <div class="action-btns">
                                            <a href="{{ route('contact.show', $contact->id) }}" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="View">
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