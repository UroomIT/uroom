@extends('layouts.base')
@section('content')
<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <div id="formGrid" class="mb-5">
            <h4>Edit this role</h4>
            <p>
               Please make sure to check all roles for this user
            </p>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('role.update', $role->id)}}" , enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @include('role.form')
                    </form>
                </div>
                <div class="hljs-container rounded-bottom">
                    <pre><code class="xml" data-url="assets/data/form-elements/code-11.json"></code></pre>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection