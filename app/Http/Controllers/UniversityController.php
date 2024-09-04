<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $universities = University::all();
        return view('university.index', compact('universities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('university.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        University::create([
            'name' => $request->name,
        ]);

        // Flashy::success('Vous avez ajouté une nouvelle zone avec success');
        return to_route('universities.index')->onlyInput(['Name', 'Name'])
        ->with('success', 'University successfully added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(University $university)
    { 
        //
        $university = University::where('id', $university->id)->first();
        return view('university.edit', compact('university'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(University $university, Request $request)
    {
        //
        $university = University::where('id', $university->id)->first();
        return view('university.edit', compact('university'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, University $university)
    {
        //
        $university = University::where('id', $university->id)->first();
        $university->name = $request->name;
        $university->update();
        // Flashy::success('Vous avez modifié une zone avec success');
        return redirect()->route('universities.index')->with('success', 'University successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(University $university)
    {
        //
        University::find($university->id)->delete();
        Flashy::warning('You have successfuly delete this university');
        return back();
    }
}
