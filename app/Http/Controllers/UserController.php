<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', [
            'users' => $users
        ]);
    }

    function profilUser(){
        return view('user.profile');
    }

    function updateProfile(Request $request, $id){
        
        $user = User::where('id', $id)->first();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->Photo = isset($request->Photo) ? $request->Photo = upload($request->Photo, 'image'): null;
        $user->phone = $request->phone;
        $user->save();
        Flashy::success('Profile updated with success');
        return redirect()->back();
    }
    /**
     * Show the form for creating a new resource.
     */


    //  
    function change_state($id)
    {
        $user = User::find($id);
        $name = $user->first_name . '' . $user->last_name;
        if ($user->State == 1) {
            # change state to 0
            User::where('id', $id)->update(array('State' => 0));
            Flashy::error("You have deactivate the account of $name with success");
        } else {
            // change state to 1
            User::where('id', $id)->update(array('State' => 1));
            Flashy::success("You have activate the acount of $name with success");
        }
        return redirect()->route('user.index');
    }

    // change your password 
     function update_password(Request $request, $id){
        $user = User::where('id', $id)->first();
        $newPassword = $request->password;
        $user->password = bcrypt($newPassword);
        $user->save();
        Flashy::success('You have successfully set the password of the user');
        $user = $request->user_id; 
        return redirect("/user/$user");
    }


    public function create()
    {
        //
        $roles = Role::all();
        return view('user.create', [
            'roles' => $roles,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $this->validate($request,[
            'email' => 'required|min:2',
            'password' => 'required',
        ]);
        $role = Role::where('id', $request->role)->first();
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'Photo' =>  isset($request->Photo) ? $request->Photo = upload($request->Photo, 'image'): null,
            'State' => 0,
            'phone' =>$request->phone,
            'role_id' => $request->role
        ]);
        $user->assignRole([$role->name]);
        Flashy::success('user successfuly added');
        return redirect()->route('user.index');
    }

     // Get and redirect to page for update user connected password
     function GetUserConnectedPassword(Request $request, $id){
        $user = User::where('id', $id)->first();
        return view('user.getPasswordUserConnected', compact('user'));
    }
    //update password user connected
    function UpdateUserPassword(Request $request, $id) {
        $user = User::where('id', $id)->first();
        $NewPassword = $request->password;
        $user->password = bcrypt($NewPassword);
        $user->save();
        Auth::logout();
        return redirect()->route('login');
    } 

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $user = User::where('id', $id)->first();
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
