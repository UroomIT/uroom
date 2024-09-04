<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
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

        Portfolio::create([
            'room_id' => $request->room_id,
            'Photo1' =>  isset($request->Photo1) ? $request->Photo1 = upload($request->Photo1, 'image'): null,
            'title1' => $request->title1,
            'Photo2' =>  isset($request->Photo2) ? $request->Photo2 = upload($request->Photo2, 'image'): null,
            'title2' => $request->title2,
            'Photo3' =>  isset($request->Photo3) ? $request->Photo3 = upload($request->Photo3, 'image'): null,
            'title3' => $request->title3,
            'Photo4' =>  isset($request->Photo4) ? $request->Photo4 = upload($request->Photo4, 'image'): null,
            'title4' => $request->title4,
            'Photo5' =>  isset($request->Photo5) ? $request->Photo5 = upload($request->Photo5, 'image'): null,
            'title5' => $request->title5,
            'Photo6' =>  isset($request->Photo6) ? $request->Photo6 = upload($request->Photo6, 'image'): null,
            'title6' => $request->title6,
            'Photo7' =>  isset($request->Photo7) ? $request->Photo7 = upload($request->Photo7, 'image'): null,
            'title7' => $request->title7,
            'Photo8' =>  isset($request->Photo8) ? $request->Photo8 = upload($request->Photo8, 'image'): null,
            'title8' => $request->title8,
            'Photo9' =>  isset($request->Photo9) ? $request->Photo9 = upload($request->Photo9, 'image'): null,
            'title9' => $request->title9,
            'Photo10' =>  isset($request->Photo10) ? $request->Photo10 = upload($request->Photo10, 'image'): null,
            'title10' => $request->title10,

           
        ]);
        $room_id = $request->room_id; 
        return redirect("/rooms/$room_id")->with('success', 'Room successfully created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
