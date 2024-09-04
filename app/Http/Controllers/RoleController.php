<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use MercurySeries\Flashy\Flashy as FlashyFlashy;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $roles = Role::all();
        $users = User::all();
        return view('role.index', compact('roles', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $permissions = Permission::all();
        $role = New Role();
        return view('role.create', compact('role', 'permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        
        $role = Role::create([
            'name' =>$request->name
        ]);
        foreach ($request->permissions as $p) {
            $role->givePermissionTo(Permission::where('id', $p)->first());
        }
        FlashyFlashy::success('role successfuly added');
        return redirect()->route('role.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $permissions = Permission::all();
        $role = Role::find($id);
        return view('role.edit', compact('permissions', 'role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $role = Role::find($id);
        $role->update([
            'name' =>$request->name,
        ]);

        foreach ($role->permissions as $p) {
            $role->revokePermissionTo($p);
        }

        foreach($request->permissions as $p) {
            $role->givePermissionTo(Permission::where('id', $p)->first());
        }
        FlashyFlashy::success('Profile successfuly updated');
        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $role = Role::find($id);
        // Role::find($id)->delete();
        if ($role->users->count() == 0) {
            # code...
            $role->delete();
            FlashyFlashy::error('Role successfuly deleted !');
            return back();
        }else{
            FlashyFlashy::warning('Warning !! this role has already one user');
            return back();
        }
    }
}
