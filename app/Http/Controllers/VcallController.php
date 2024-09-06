<?php

namespace App\Http\Controllers;

use App\Models\Vcall;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class VcallController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $vcalls = Vcall::all();
        return view('vcalls.index', compact('vcalls'));
    }

// 

function confirm_scheduleVcall($id)
    {
        $vcall = Vcall::find($id);
        if ($vcall->is_validated == 1) {
            # change state to 0
            Vcall::where('id', $id)->update(array('is_validated' => 0));
            Flashy::error("You have confirmed the schedule of video call ");
        }
        return redirect()->back();
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
    }

    /**
     * Display the specified resource.
     */
    public function show(Vcall $vcall)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vcall $vcall)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vcall $vcall)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vcall $vcall)
    {
        //
    }
}
