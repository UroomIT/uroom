@extends('layouts.base')
@section('content')
<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <div class="d-flex align-items-center layout-top-spacing">
            <div>
                <a href="{{ route('complains.index')}}"><i class="fa fa-arrow-circle-left"></i> Complains </a>
            </div>
        </div>

        <div class="d-flex align-items-center mb-3">
            <div>
                <h1 class="page-header mb-0">Title: <b> {{ $complain->Title }}</b> </h1>
            </div>
            
            <div class="ms-auto">
           
            </div>
        </div>
       

        <div class="row gx-4">
            <div class="col-xl-6">
                <div class="widget-content widget-content-area">
                   
                    <p class="p">
                        {{ $complain->Description }}
                    </p>    
                   
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header bg-none fw-bold d-flex align-items-center">
                        <div class="flex-1">
                            <div>Complain Information</div>
                        </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if($complain->IsResolved === 0)
                                <span class="badge badge-light-danger bg-opacity-15 px-2 py-6px rounded fs-12px d-inline-flex align-items-center">
                                    <i class="fa fa-circle fs-9px fa-fw me-5px"></i> &nbsp; complain Send</span>
                            @elseif($complain->IsResolved === 1)
                                <span class="badge badge-light-warning rounded fs-12px d-inline-flex align-items-center">
                                <i class="fa fa-circle fs-9px fa-fw me-5px"></i>&nbsp; complain Receive</span>
                            @elseif($complain->IsResolved === 2)
                            <span class="badge badge-light-success rounded fs-12px d-inline-flex align-items-center">
                                <i class="fa fa-circle fs-9px fa-fw me-5px"></i>&nbsp; complain Solved</span>
                            @endif
                        
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-1 d-flex">
                                <div class="me-4"><i class="fa fa-calendar fa-lg fa-fw text-body text-opacity-25"></i></div>
                                <div>Category: {{ $complain->Category }} </div>
                                
                            </div>
                        </div>
                        
                        @if(auth()->user()->isAdmin())
                        <hr class="my-3 opacity-1">
                        <div class="d-flex">
                            <div class="flex-1 d-flex">
                                <div class="me-3"><i class="fa fa-users fa-lg fa-fw text-body text-opacity-25"></i></div>
                                <div>User send complain :</div>
                                <span class="fw-bold fs-12px ms-auto me-2 d-flex align-items-center"> {{ $complain->user->first_name }}{{ $complain->user->last_name }}</span>
                            </div>
                        </div>
                        <hr class="my-3 opacity-1">
                        <div class="d-flex">
                            <div class="flex-1 d-flex">
                                <div class="me-3"><i class="fa fa-car fa-lg fa-fw text-body text-opacity-25"></i></div>
                                <div>State complain :</div>
                                @if($complain->IsResolved === 0)
                                    <span class="badge badge-light-danger bg-opacity-15 px-2 py-6px rounded fs-12px d-inline-flex align-items-center">
                                        <i class="fa fa-circle fs-9px fa-fw me-5px"></i> &nbsp; complain Send</span>
                                @elseif($complain->IsResolved === 1)
                                    <span class="badge badge-light-warning rounded fs-12px d-inline-flex align-items-center">
                                    <i class="fa fa-circle fs-9px fa-fw me-5px"></i>&nbsp; complain Receive</span>
                                @elseif($complain->IsResolved === 2)
                                <span class="badge badge-light-success rounded fs-12px d-inline-flex align-items-center">
                                    <i class="fa fa-circle fs-9px fa-fw me-5px"></i>&nbsp; complain Solved</span>
                                @endif
                               
                            </div>
                        </div>
                        @endif

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