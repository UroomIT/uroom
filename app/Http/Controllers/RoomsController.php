<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Rooms;
use App\Models\TypeRoom;
use App\Models\University;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rooms = Rooms::all();
        return view('rooms.index', compact('rooms'));
    }

    // List Room available availableRoom
    function availableRoom(){
        
        $rooms = Rooms::where('IsAvailable', 0)->take(8)->get();
        return view('rooms.available', compact('rooms'));
    }
     // List Room No available availableRoom
    function bookedRoom(){
        $rooms = Rooms::where('IsAvailable', 1)->take(8)->get();
        return view('rooms.booked', compact('rooms'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $annee = date('y');
        $mois = str_pad(date('m'), 2, '0', STR_PAD_LEFT);
        $RoomNumber = 'RO'.$annee.$mois;
        $count = Rooms::whereYear('created_at', '=', date('Y'))
        ->whereMonth('created_at', '=', date('m'))
        ->count() + 1;
        $RoomNumber .= str_pad($count, 3, '0', STR_PAD_LEFT);
        $typeRooms = TypeRoom::all();
        $universities = University::all();
        return view('rooms.create', compact('RoomNumber', 'typeRooms', 'universities'));
    }

    // change state Room
    function change_room_state($id){
        $room = Rooms::find($id);
        //  $name = $agent->nom.''.$agent->prenom;
         if ($room->IsOnline == 1) {
             # change state to 0
             Rooms::where('id', $id)->update(array('IsOnline' => 0));
            //  Flashy::error('Vous avez désactivé le compte avec success');
         }else{
             // change state to 1
            Rooms::where('id', $id)->update(array('IsOnline' => 1));
            // Flashy::success('Vous avez activé le compte avec success');
         }
        return redirect()->route('rooms.index')->with('success', 'The state successfully changed!');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 
       
        Rooms::create([
            'RoomNumber' => $request->RoomNumber,
            'Title' => $request->Title,
            'gender' => $request->gender,
            'type_room_id' => $request->typeRoom,
            'university_id' => $request->university_id,
            'logo_university' =>isset($request->logo_university) ? $request->logo_university = upload($request->logo_university, 'image'): null,
            'Address' => $request->Address,
            'Price' => $request->Price,
            'Photo' =>  isset($request->Photo) ? $request->Photo = upload($request->Photo, 'image'): null,
            'Description' => $request->Description,
            'Rate' => $request->Rate,
            'IsAvailable' => 0,
            'IsOnline' => 0,
            'univ_around_available' => json_encode($request->universities)
        ]);
        return to_route('rooms.index')->onlyInput(['RoomNumber', 'Title','Address','Price','Description'])
        ->with('success', 'Room successfully created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $room = Rooms::where('id', $id)->first();
        $galleries = Portfolio::where('room_id', $room->id)->get();
        
        // $rooms = Rooms::where('IsAvailable', 1, 'IsOnline', 1)->get();
        return view('rooms.show', compact('room', 'galleries'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, Request $request)
    {
        //
        $room = Rooms::where('id', $id)->first();
        $typeRooms = TypeRoom::all();
        $universities = University::all();
        return view('rooms.edit', compact('room', 'typeRooms', 'universities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $room = Rooms::where('id', $id)->first();
        $room->Title = $request->Title;
        $room->gender = $request->gender;
        $room->type_room_id = $request->typeRoom;
        $room->university_id = $request->university_id;
        $room->logo_university = isset($request->logo_university) ? $request->logo_university = upload($request->logo_university, 'image'): null;
        $room->Address = $request->Address;
        $room->Price = $request->Price;
        $room->Photo = isset($request->Photo) ? $request->Photo = upload($request->Photo, 'image'): null;
        $room->Description = $request->Description;
        $room->Rate = $request->Rate;
        $room->update();
        return redirect()->route('rooms.index')->with('success', 'Room successfully edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rooms $rooms)
    {
        //
    }
}
