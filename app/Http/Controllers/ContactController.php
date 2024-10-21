<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::orderByDesc('id')->paginate(10);

        $services = [
            'acquisition' => 'Aircraft & Helicopter Acquisition',
            'aerial' => 'Aerial Fire-Fighting Consultant & Operation',
            'cargo' => 'Heavy & Outsized Cargo Service',
            'charter' => 'Private Jet Charters & Flights',
            'other' => 'Other',
        ];

        return view ('admin.contacts.index', compact('contacts', 'services'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }
}
