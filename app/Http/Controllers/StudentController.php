<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Spatie\Permission\Models\Role;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:students',
        // ]);

        Student::create([
            'room_id' => $request->room_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'email' => $request->email,
            'phone' => $request->phone,
            'university_id' => $request->university_id,
            'address' =>$request->address,
            'is_validated' => false, // Initially not validated
        ]);

        return redirect()->back()->with('success', 'Thank you for selecting this room as your choice, we will back to you soon for next steps. Thank you!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        //
        Student::find($id)->delete();
        Flashy::warning('You have successfuly delete this student');
        return back();
    }
}
