<?php

namespace App\Http\Controllers;

use App\Models\TeamModel;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class TeamModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $teams = TeamModel::all();
        return view('teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        TeamModel::create([
            'name' => $request->name,
            'fonction' => $request->fonction,
            'email' => $request->email,
            'phone' => $request->phone,
            'photo' =>isset($request->photo) ? $request->photo = upload($request->photo, 'image'): null,
        ]);
        return to_route('teams.index')->with('success', 'Team successfully created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(TeamModel $teamModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TeamModel $teamModel)
    {
        //
        $team = TeamModel::where('id', $teamModel->id)->first();
        return view('teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TeamModel $teamModel)
    {
        //
        $team = TeamModel::where('id', $teamModel->id)->first();
        $team->name = $request->name;
        $team->fonction = $request->fonction;
        $team->email = $request->email;
        $team->phone = $request->phone;
        $team->photo = isset($request->photo) ? $request->photo = upload($request->photo, 'image'): null;
        $team->update();
        return redirect()->route('teams.index')->with('success', 'Team successfully edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeamModel $teamModel, Request $request)
    {
        //
        TeamModel::where('id',$request->team_id)->delete();
        Flashy::success('You have successfuly delete this team member');
        return back();
    }
}
