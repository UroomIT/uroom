<?php

namespace App\Http\Controllers;

use App\Models\TypePayment;
use Illuminate\Http\Request;

class TypePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $type_payments = TypePayment::all();
        return view('type_payment.index', compact('type_payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('type_payment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        TypePayment::create([
            'Name' => $request->Name,
        ]);

        // Flashy::success('Vous avez ajouté une nouvelle zone avec success');
        return to_route('type_payment.index')->onlyInput(['Name', 'Name'])
        ->with('success', 'Payment Type successfully added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(TypePayment $typePayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypePayment $typePayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TypePayment $typePayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypePayment $typePayment)
    {
        //
    }
}
