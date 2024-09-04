@extends('layouts.base')
@section('content')
<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <div class="d-flex align-items-center layout-top-spacing">
            <div>
                <a href="{{ route('contact.index')}}"><i class="fa fa-arrow-circle-left"></i> Contacts </a>
            </div>
        </div>

        <div class="d-flex align-items-center mb-3">
            <div>
                <h1 class="page-header mb-0">Subject: <b> {{ $contact->subject }}</b> </h1>
            </div>
            
            <div class="ms-auto">
           
            </div>
        </div>
       

        <div class="row gx-4">
            <div class="col-xl-6">
                <div class="widget-content widget-content-area">
                   
                    <p class="p">
                        {{ $contact->description }}
                    </p>    
                   
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header bg-none fw-bold d-flex align-items-center">
                        <div class="flex-1">
                            <div>Contact information</div>
                        </div>
                        
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-1 d-flex">
                                <div class="me-4"><i class="fa fa-calendar fa-lg fa-fw text-body text-opacity-25"></i></div>
                                <div>Full Name: {{ $contact->full_name }} </div>
                                <span class="badge bg-theme-subtle text-theme fw-bold fs-12px ms-auto me-2 d-flex align-items-center">{{ $contact->phone }}</span>
                            </div>
                        </div>
                        <hr class="my-3 opacity-1">
                        <div class="d-flex">
                            <div class="flex-1 d-flex">
                                <div class="me-3"><i class="fa fa-car fa-lg fa-fw text-body text-opacity-25"></i></div>
                                <div>Email :</div>
                                <span class="fw-bold fs-12px ms-auto me-2 d-flex align-items-center">  {{ $contact->email }}</span>
                            </div>
                        </div>
                        <hr class="my-3 opacity-1">
                        <div class="d-flex">
                            <div class="flex-1 d-flex">
                                <div class="me-3"><i class="fa fa-car fa-lg fa-fw text-body text-opacity-25"></i></div>
                                <div>Phone :</div>
                                <span class="fw-bold fs-12px ms-auto me-2 d-flex align-items-center">  {{ $contact->phone }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
    $('.show_delete').click(function(event) {
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