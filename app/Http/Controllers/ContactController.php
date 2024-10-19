<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('admin.contacts.index',
        compact('contacts'));
    }

    public function create(){
        return view('admin.contacts.create');
    }

    public function store(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'phone_number'=>'required',
                'email'=>'required',
            ]);
        Contact::create($request->all());
        return redirect()->route('admin.contacts.index')->with('success', 'Contact created successfully.');
    }

    public function edit(Contact $contact)
    {
        return view('admin.contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required',
            'email' => 'required|string|max:255',
        ]);
        $data = $request->all();
        $contact->update($data);
        return redirect()->route('admin.contacts.index')->with('success', 'Contact updated successfully');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contacts.index')->with('danger', 'Contact deleted successfully');
    }

}
