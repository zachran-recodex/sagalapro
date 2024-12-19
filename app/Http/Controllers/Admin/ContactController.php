<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
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

        return view('admin.contacts.index', compact('contacts', 'services'));
    }

    public function show(Contact $contact)
    {
        $services = [
            'acquisition' => 'Aircraft & Helicopter Acquisition',
            'aerial' => 'Aerial Fire-Fighting Consultant & Operation',
            'cargo' => 'Heavy & Outsized Cargo Service',
            'charter' => 'Private Jet Charters & Flights',
            'other' => 'Other',
        ];

        return view('admin.contacts.detail', compact('contact', 'services'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('admin.contacts.index')->with('toast', ['type' => 'success', 'message' => 'Contact deleted successfully.']);
    }
}
