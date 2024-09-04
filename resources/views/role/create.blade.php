@extends('layouts.base')
@section('content')
<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <div id="formGrid" class="mb-5 layout-top-spacing">
            <h4>Add new role</h4>
            <p>
               Please be sure to check all permissions allow to this role
            </p>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('role.store')}}", enctype="multipart/form-data">
                        @csrf
                        @include('role.form', ['role'=>$role])
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