<?php

namespace App\Http\Controllers;

use App\Models\BasicInfo;
use App\Models\Logo;
use Illuminate\Http\Request;

class BasicInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $email = BasicInfo::take(1)->first();
        $phone = BasicInfo::where('id', 2)->first();
        $logo = Logo::take(1)->first();
        return view('basic_infos.index', compact('email', 'phone','logo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_email()
    {
        //
        return view('basic_infos.create_email');
    }
    public function create_phone()
    {
        //
        return view('basic_infos.create_phone');
    }

   
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        BasicInfo::create([
            'Phone' => $request->Phone,
            'Email' => $request->Email,
        ]);
        return redirect()->route('basic_information.index')->with('success', 'Informaiton successfully added!');
    }

    // store room
    function save_logo(Request $request){
        Logo::create([
            'Photo' =>  isset($request->Photo) ? $request->Photo = upload($request->Photo, 'image'): null,
        ]);
        
        return redirect()->route('basic_information.index')->with('success', 'logo successfully added!');
    }

    // edit logo
    function editLogo(Request $request, string $id){

        $logo = Logo::where('id', $id)->first();
        return view('basic_infos.edit_logo', compact('logo'));
    }

    // updtae logo

    function updateLogo(Request $request, string $id){

        $logo = Logo::where('id', $id)->first();
        $logo->Photo = isset($request->Photo) ? $request->Photo = upload($request->Photo, 'image'): null;
        $logo->update();
        return redirect()->route('basic_information.index')->with('success', 'logo successfully updated!');

    }

    /**
     * Display the specified resource.
     */
    public function show(BasicInfo $basicInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $binfo = BasicInfo::where('id',$id)->first();
        return view('basic_infos.edit', compact('binfo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $binfo = BasicInfo::where('id', $id)->first();
        $binfo->Email = $request->Email;
        $binfo->Phone = $request->Phone;
        $binfo->update();
        return redirect()->route('basic_information.index')->with('success', 'Information successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BasicInfo $basicInfo)
    {
        //
    }
}
