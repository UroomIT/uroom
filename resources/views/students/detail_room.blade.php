@extends('layouts.base')
@section('content')
<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <div class="d-flex align-items-center layout-top-spacing">
            <div>
                <h1 class="page-header mb-0">Title: <b> {{ $student->room->Title }}</b> </h1>
            </div>

            <div class="ms-auto">
            </div>
        </div>
        <p>Room Type: <b>{{ $student->room->type_room->Name}}</b></p>
        @php
            $photoUrl = str_replace('\\', '/', $student->room->photo_url);
           
        @endphp

        <div class="row gx-4">
            <div class="row">
                <div class="col-xl-6">
                    <div class="widget-content widget-content-area">
                        <a class="card style-7" href="https://themeforest.net/item/cork-responsive-admin-dashboard-template/25582188" target="_blank">
                            <img src="{{ asset($photoUrl) }}" class="card-img-top" alt="...">
                           
                        </a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header bg-none fw-bold d-flex align-items-center">
                            <div class="flex-1">
                                <div>Room Information</div>
                            </div>
                            &nbsp;
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-1 d-flex">
                                    <div class="me-4"><i class="fa fa-calendar fa-lg fa-fw text-body text-opacity-25"></i></div>
                                    <div>Room Number: <b>{{ $student->room->RoomNumber }}</b> </div>

                                </div>
                            </div>
                            <hr class="my-3 opacity-1">

                            <div class="d-flex">
                                <div class="flex-1 d-flex">
                                    <div class="me-4"><i class="fa fa-dollar-sign fa-lg fa-fw text-body text-opacity-25"></i></div>
                                    <div>Price: <b>RM &nbsp; {{ $student->room->Price }}</b></div>

                                </div>
                            </div>
                            <hr class="my-3 opacity-1">

                            <div class="d-flex">
                                <div class="flex-1 d-flex">
                                    <div class="me-4"><i class="fa fa-map fa-lg fa-fw text-body text-opacity-25"></i></div>
                                    <div>Address:  <b>{{ $student->room->Address }}</b> </div>

                                </div>
                            </div>
                            <hr>
                            <h3 class="">Description</h3>
                            <p class="p">
                                {{ $student->room->Description }}
                            </p>
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
                    title: `Are sure to delete ?`,
                    text: "You will definetely",
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