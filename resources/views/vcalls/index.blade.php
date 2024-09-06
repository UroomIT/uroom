@extends('layouts.base')
@section('content')
<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <div class="row layout-top-spacing">
            <h1>Students for video call  </h1>
            <div class="statbox widget box box-shadow">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa fa-times-circle fa-lg" style="color:white"></i></button>
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Error:"><use xlink:href="#check-circle-fill"/></svg>
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa fa-times-circle fa-lg" style="color:white"></i></button>
                    </div>
                @endif
                <div class="widget-content widget-content-area table-responsive">
                    <table id="zero-config" class="table  style-1 dt-table-hover non-hover">
                        <thead>
                            <tr>
                                <th class="" scope="col">Name</th>
                                <th class="" scope="col">Gender</th>
                                <th class="" scope="col">Email</th>
                                <th class="" scope="col">Date for sit </th>
                                <th class="" scope="col">Moving Date </th>
                                <th class="" scope="col">Room</th>
                                <th class="" scope="col">Confirm</th>
                                <th scope="col">Delete</th>
                            </tr> 
                        </thead>
                        <tbody>
                            @foreach($vcalls as $vcall)
                                <tr>
                                    <td>{{ $vcall->name }}</td>
                                    <td>{{ $vcall->gender }}</td>
                                    <td>{{ $vcall->email }}</td>
                                    <td>{{ $vcall->datecall }}</td> 
                                    <td>{{ $vcall->datemove }}</td> 
                                    <td>{{ $vcall->room->Title }}</td>
                                    <td class="text-center">
                                        @if($vcall->is_validated == 0)
                                        <form method="POST" action="{{ route('confirm_scheduleVcall', $vcall->id) }}">
                                            @csrf
                                            <input type="hidden" name="vcall_id" value="{{ $vcall->id ?? '' }}">
                                            <button type="submit" class="btn btn-xs btn-danger "  title='Confirm student acount'>Confirm</button>
                                        </form>
                                        @else
                                        <span class="badge badge-light-success bg-opacity-15 px-2 py-6px rounded fs-12px d-inline-flex align-items-center"> Approuved </span>
                                        
                                        @endif
                                    </td>
                                    <td class="align-middle">
                                        <form method="POST" action="{{ route('vcall.destroy', $vcall->id) }}">
                                            @csrf
                                            <input type="hidden" name="vcall_id" value="{{ $vcall->id ?? '' }}">
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