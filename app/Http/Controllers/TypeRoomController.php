<?php

namespace App\Http\Controllers;

use App\Models\TypeRoom;
use Illuminate\Http\Request;

class TypeRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $type_rooms = TypeRoom::all();
        return view('type_room.index', compact('type_rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('type_room.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // $this->validate($request, [
        //     'Name' => 'required|min:5|unique:type_rooms'
        // ]);
        TypeRoom::create([
            'Name' => $request->Name,
        ]);

        // Flashy::success('Vous avez ajouté une nouvelle zone avec success');
        return to_route('type-room.index')->onlyInput(['Name', 'Name'])
        ->with('success', 'Room Type successfully added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(TypeRoom $typeRoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypeRoom $typeRoom)
    {
        //
        $TypeRoom = TypeRoom::where('id', $typeRoom->id)->first();
        return view('type_room.edit', compact('TypeRoom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TypeRoom $typeRoom)
    {
        //
        $typeRoom = TypeRoom::where('id', $typeRoom->id)->first();
        $typeRoom->Name = $request->Name;
        $typeRoom->update();
        // Flashy::success('Vous avez modifié une zone avec success');
        return redirect()->route('type-room.index')->with('success', 'Room Type successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeRoom $typeRoom)
    {
        //
        TypeRoom::find($typeRoom->id)->delete();
        return redirect()->route('type-room.index')->with('success', 'Room Type successfully deleted!');
    }
}
