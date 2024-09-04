@extends('layouts.base')
@section('content')
<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <div class="row layout-top-spacing">
            <h1>List of students </h1>
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
                                <th class="" scope="col">Phone</th>
                                <th class="" scope="col">Room</th>
                                <th class="" scope="col">University</th>
                                <th  scope="col">Address</th>
                                <th scope="col">Delete</th>
                            </tr> 
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                                @if($student->is_validated == 0)
                                <tr>
                                    <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->phone }}</td>
                                    <td>{{ $student->room->Title }}</td>
                                    <td>{{ $student->university->name }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td class="text-center">
                                        <form method="POST" action="{{ route('save_student', $student->id) }}">
                                            @csrf
                                            <input type="hidden" name="student_id" value="{{ $student->id ?? '' }}">
                                            <button type="submit" class="btn btn-xs btn-danger "  title='Confirm student acount'>Confirm</button>
                                        </form>
                                    </td>
                                    <td class="align-middle">
                                        <form method="POST" action="{{ route('students.destroy', $student->id) }}">
                                            @csrf
                                            <input type="hidden" name="student_id" value="{{ $student->id ?? '' }}">
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-xs btn-default show_confirm" data-toggle="tooltip" title='Delete'><i class="fa fa-times-circle"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>



@endsection