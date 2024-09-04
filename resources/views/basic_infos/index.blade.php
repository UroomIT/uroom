@extends('layouts.base')
@section('content')

<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <div id="tableCustomBasic" class="col-lg-12 col-12 layout-spacing">
            <div class="widget-header seperator-header layout-top-spacing">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <div class="d-flex justify-content-between mb-4">
                            <h1>Configuration informations on top of the website</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <div class="d-flex justify-content-between mb-4">
                                <h4>Address Email</h4>
                                <div>
                                    <!-- Form Button trigger modal -->
                                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#inputFormModal">
                                        <i class="fa fa-plus"></i> New
                                    </button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                        <table id="zero-config-rapproche" class="table style-1 dt-table-hover non-hover">
                            <thead>
                                <tr>
                                    <th class="" scope="col">Email</th>
                                    <th scope="col">Edit</th>
                                    <th  scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td class="">
                                            
                                                @isset($email->Email)
                                                    {{ $email->Email }}
                                                @endisset
                                        </td>
                                        <td>
                                            <a href="{{ route('basic_information.edit', $email->id) }}" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                    <path d="M12 20h9"></path>
                                                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </a> 
                                        </td>
                                        <td>
                                            <div class="action-btns">
                                                <form method="POST" action="">
                                                    @csrf
                                                    <input type="hidden" name="type-payment_id" value="">
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button type="submit" class="btn btn-xs btn-default show_confirm" data-toggle="tooltip" title='Delete'><i class="fa fa-times-circle"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    
                                    </tr>
                                
                            </tbody>
                        </table>
                    <hr>
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <div class="d-flex justify-content-between mb-4">
                                <h4>Phone number</h4>
                                <div>
                                     <!-- Form Button trigger modal add Phone-->
                                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inputFormModalPhone">
                                        <i class="fa fa-plus"></i> New
                                    </button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                        <table id="zero-config-rapproche" class="table style-1 dt-table-hover non-hover">
                            <thead>
                                <tr>
                                    <th class="" scope="col">Phone</th>
                                    
                                    <th scope="col">Edit</th>
                                    <th  scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                    <tr>
                                        <td class="">
                                               
                                             {{ $phone->Phone }}
                                        </td>
                                        <td>
                                            <a href="{{ route('basic_information.edit',$phone->id) }}" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                    <path d="M12 20h9"></path>
                                                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </a> 
                                        </td>
                                        <td>
                                            <div class="action-btns">
                                                <form method="POST" action="">
                                                    @csrf
                                                    <input type="hidden" name="type-payment_id" value="">
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button type="submit" class="btn btn-xs btn-default show_confirm" data-toggle="tooltip" title='Delete'><i class="fa fa-times-circle"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    
                                    </tr>
                                
                            </tbody>
                        </table>
                    <hr>
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <div class="d-flex justify-content-between mb-4">
                                <h4>Logo website</h4>
                                <div>
                                    @if(empty($logo->photo_url))
                                     <!-- Form Button trigger modal add Phone-->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inputFormModalLogo">
                                        <i class="fa fa-plus"></i> New
                                    </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                        <table id="zero-config-rapproche" class="table style-1 dt-table-hover non-hover">
                            <thead>
                                <tr>
                                    <th class="" scope="col">Logo</th>
                                    <th scope="col">Edit</th>
                                    <th  scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td class="">
                                        
                                            <img src="{{ $logo->photo_url }}" alt="" width="10%" class="img img-responsive img-circle">
                                       
                                        </td> 
                                        <td>
                                            <a href="{{ route('logo.edit', $logo->id) }}" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                    <path d="M12 20h9"></path>
                                                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="action-btns">
                                                <form method="POST" action="">
                                                    @csrf
                                                    <input type="hidden" name="type-payment_id" value="">
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button type="submit" class="btn btn-xs btn-default show_confirm" data-toggle="tooltip" title='Delete'><i class="fa fa-times-circle"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    
                                    </tr>
                                
                            </tbody>
                        </table>
                </div>
                
            </div>
        </div>
    </div>
</div>


 <!-- Modal add Email -->
    <div class="modal fade inputForm-modal" id="inputFormModal" tabindex="-1" data-bs-backdrop="static" role="dialog"
        aria-labelledby="inputFormModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bg-light ">
                <div class="modal-header" id="inputFormModalLabel">
                    <h5 class="modal-title">Add New Email</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">

                    </button>
                </div>
                <div class="modal-body">
                    <form class="mt-0" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <label for="imputEmail" class="col-sm-3 col-form-label">Email </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="imputEmail" name="Email" required>
                                @error('Email')
                                    <span class="text-danger error">This field is required
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-light-danger mt-2 mb-2 btn-no-effect"
                                data-bs-dismiss="modal">Reset</button>
                            <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect"
                                data-bs-dismiss="modal">Add</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal -->

    <div class="modal fade inputForm-modal" id="inputFormModalPhone" tabindex="-1" data-bs-backdrop="static" role="dialog" aria-labelledby="inputFormModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content bg-light ">
            <div class="modal-header" id="inputFormModalLabel">
                <h5 class="modal-title">Add Phone</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">

                </button>
            </div>
            <div class="modal-body">
                <form class="mt-0" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <label for="inputFonction" class="col-sm-3 col-form-label">Phone </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputFonction" name="Phone" required>
                            @error('Phone') <span class="text-danger error">This field is required</span>@enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Add</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    
</div>


<!-- modal inputFormModalLogo -->
<div class="modal fade inputForm-modal" id="inputFormModalLogo" tabindex="-1" data-bs-backdrop="static" role="dialog" aria-labelledby="inputFormModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content bg-light ">
            <div class="modal-header" id="inputFormModalLogo">
                <h5 class="modal-title">Add Logo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">

                </button>
            </div>
            <div class="modal-body">
                <form class="mt-0" action="{{ route('save_logo') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <label for="inputLogo" class="col-sm-3 col-form-label">Logo </label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="inputLogo" name="Photo" required>
                            @error('Photo') <span class="text-danger error">This field is required</span>@enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



















@endsection