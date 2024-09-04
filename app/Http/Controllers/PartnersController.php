<?php

namespace App\Http\Controllers;

use App\Models\Partners;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $partners = Partners::all();
        return view('partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('partners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Partners::create([
            'name' => $request->name,
            'slogan' => $request->slogan,
            'logo' =>isset($request->logo) ? $request->logo = upload($request->logo, 'image'): null,
            'Address' => $request->Address,
            'Price' => $request->Price,
            'IsOnline' => 0,
        ]);
        return to_route('partners.index')->with('success', 'Partner successfully created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partners $partners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partners $partners)
    {
        //
        $partner = Partners::where('id', $partners->id)->first();
        return view('parters.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partners $partners)
    {
        //
        $partner = Partners::where('id', $partners->id)->first();
        $partner->name = $request->name;
        $partner->slogan = $request->slogan;
        $partner->logo = isset($request->logo) ? $request->logo = upload($request->logo, 'image'): null;
        $partner->update();
        return redirect()->route('parterns.index')->with('success', 'Room successfully edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partners $partners, Request $request)
    {
        //
        Partners::where('id',$request->partner_id)->delete();
        Flashy::success('You have successfuly delete this partner');
        return back();
    }
}
