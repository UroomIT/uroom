<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use App\Models\Rooms;
use Illuminate\Http\Request;

class ComplainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (auth()->user()->isAdmin()) {
            $complains = Complain::all();
        }else{
            $user_id = auth()->user()->id;
            $complains = Complain::where('user_id', $user_id)->get();
        }
        return view('complains.index', compact('complains'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // IsOnline
        $rooms = Rooms::all();
        return view('complains.create', compact('rooms'));
    }

     // change state Room
    function change_complain_state($id){
        $complain = Complain::find($id);
        //  $name = $agent->nom.''.$agent->prenom;
         if ($complain->IsResolved == 0) {
             # change state to 0
             Complain::where('id', $id)->update(array('IsResolved' => 1));
            //  Flashy::error('Vous avez désactivé le compte avec success');
        }else if ($complain->IsResolved == 1){
            Complain::where('id', $id)->update(array('IsResolved' => 2));
        }
        return redirect()->route('complains.index')->with('success', 'The state successfully changed!');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Complain::create([
           'user_id' => auth()->user()->id,
            'Title' => $request->Title,
            'Category' => $request->Category,
            'Description' => $request->Description,
            'IsResolved' => 0,
        ]);
        return to_route('complains.index')->with('success', 'complain successfully created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Complain $complain)
    {
        //
        $complain = Complain::where('id', $complain->id)->first();
        return view('complains.show', compact('complain'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Complain $complain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Complain $complain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Complain $complain)
    {
        //
    }
}
