<div class="mb-3 row">
    <label for="imputRole" class="col-sm-2 col-form-label">Role Name</label>
    <div class="col-sm-6">
        <input type="text" class="form-control" name="name" value="{{ old('name')? old('name'): $role->name }}" id="imputRole">
        @error('profile') <span class="text-danger error">This name already exist</span>@enderror
    </div>
</div>

@php
$categorized = array_reduce($permissions->toArray(), function ($result, $item) {
$parts = explode('.', $item['name']);
$key = $parts[0];
$result[$key][] = $item;
return $result;

},[]);
@endphp

@foreach($categorized as $ky => $c)
<div class="row mb-2" id="permissions-web">
    @foreach($c as $key => $p)
    @if($key == 0)
    <div class="col-md-4">
        {{ ucfirst($ky)}}
    </div>
    @endif
    <div class="col-sm-10">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck1" value="{{ $p['id']}}" name="permissions[]" {{ $role->hasPermissionTo($p['name']) ?'checked': " " }}>
            {{$p['label']}}
        </div>
    </div>
    @endforeach
</div>
@endforeach
<div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
        <a href="{{ URL::previous() }}" class="btn btn-danger">Cancel</a>
        <button type="submit" class="btn btn-black ">Add this role</button>
    </div>
</div>