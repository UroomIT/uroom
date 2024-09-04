<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class SaveStudentController extends Controller
{
    //

    function list_students() {
        
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    function save_student($studentId) {

        $student = Student::findOrFail($studentId);
        $room = Rooms::where('id',$student->room_id)->first();
       // Convert the role name to lowercase when querying
        $studentRole = Role::whereRaw('LOWER(name) = ?', ['student'])->first();
        $student->is_validated = true;
        $student->save();

        if (!$student->is_validated) {
            return redirect()->back()->with('error', 'Student must be validated first.');
        }
        // Ensure the role exists before proceeding
        if (!$studentRole) {
            return redirect()->back()->with('error', 'Student role not found. Please create the role first.');
        }

        // Create the user account
        $user = User::create([
            'first_name' => $student->first_name,
            'last_name' => $student->last_name,
            'gender' => $student->gender,
            'email' => $student->email,
            'password' => Hash::make('password'), // Generate a secure password or send a password reset link
            'email' => $student->email,
            'room_id' => $student->room_id,
            'State' => 1,
            'phone' => $student->phone,
            'role_id' =>$studentRole->id
        ]);
        // Assign the "Student" role to the user
        $user->assignRole($studentRole->id);
        $room->IsAvailable = 1;
        $room->save();
        return redirect()->back()->with('success', 'User account created and Student role assigned successfully.');
    }

    function detail_myRoom() {
        $student = User::where('room_id',   auth()->user()->room_id)->first();
        return view('students.detail_room', compact('student'));
    }
}
