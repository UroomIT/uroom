@extends('layouts.base')
@section('content')
<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <div class="row layout-top-spacing">
        <div class="widget-header seperator-header layout-top-spacing">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <div class="d-flex justify-content-between mb-4">
                            <h1>List of team members</h1>
                            <div>
                                <!-- Form Button trigger modal -->
                                <a href="{{ route('teams.create')}}" class="btn btn-primary">
                                    <i class="fa fa-plus"></i> New
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                <th class="" scope="col">Fonction</th>
                                <th class="" scope="col">Email</th>
                                <th class="" scope="col">Phone</th>
                                <th class="" scope="col">Photo</th>
                                <th scope="col">Delete</th>
                            </tr> 
                        </thead>
                        <tbody>
                            @foreach($teams as $team)
                                <tr>
                                    <td>{{ $team->name }} </td>
                                    <td>{{ $team->fonction }} </td>
                                    <td>{{ $team->email }} </td>
                                    <td>{{ $team->phone }} </td>
                                    <td class="align-middle">
                                        <form method="POST" action="{{ route('teams.destroy', $team->id) }}">
                                            @csrf
                                            <input type="hidden" name="team_id" value="{{ $team->id ?? '' }}">
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