<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class RateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rates = Rate::all();
        return view('rates.index', compact('rates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('rates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Rate::create([
            'name' => $request->name,
            'faculty' => $request->faculty,
            'rate' => $request->rate,
            'photo' =>isset($request->photo) ? $request->photo = upload($request->photo, 'image'): null,
            'description' => $request->description,
        ]);
        return to_route('rates.index')->with('success', 'Comment client successfully created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rate $rate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rate $rate)
    {
        //
        $rate = Rate::where('id', $rate->id)->first();
        return view('rates.edit', compact('rate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rate $rate)
    {
        //
        $rate = Rate::where('id', $rate->id)->first();
        $rate->name = $request->name;
        $rate->faculty = $request->faculty;
        $rate->rate = $request->rate;
        $rate->photo = isset($request->photo) ? $request->photo = upload($request->photo, 'image'): null;
        $rate->description = $request->description;
        $rate->update();
        return redirect()->route('rates.index')->with('success', 'Client comment successfully edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rate $rate, Request $request)
    {
        //
        Rate::where('id',$request->rate_id)->delete();
        Flashy::success('You have successfuly delete this comment');
        return back();
    }
}
