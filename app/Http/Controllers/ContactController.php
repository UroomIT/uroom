<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

     // change state contact
     function change_contact_state($id){
        $contact = Contact::find($id);
        //  $name = $agent->nom.''.$agent->prenom;
         if ($contact->state == 1) {
             # change state to 0
             Contact::where('id', $id)->update(array('state' => 0));

         }else{
             // change state to 1
            Contact::where('id', $id)->update(array('state' => 1));

         }
        return redirect()->route('contact.index')->with('success', 'The state successfully changed!');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Contact::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'description' => $request->description,
            'state' => 0
        ]);
        return to_route('frontend.contact')->onlyInput(['full_name', 'email'])
        ->with('success', 'Thank you for contacting, we will back to you soon !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
        $contact = Contact::where('id', $contact->id)->first();
        return view('contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
