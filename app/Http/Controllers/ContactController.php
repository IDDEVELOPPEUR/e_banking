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
        $liste = Contact::all();

        return view('contacts.index',compact('liste'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom' => 'required|min:2',
            'prenom' => 'required|min:2',
            'adresse' => 'required|min:2',
            'telephone' => 'required|max:9',
            'Mib' => 'required|string|max:13|',
        ]);
        $contact = new Contact();
        $contact->nom = $request->nom;
        $contact->prenom = $request->prenom;
        $contact->adresse = $request->adresse;
        $contact->telephone = $request->telephone;
        $contact->Mib = $request->Mib;
        $contact->save();


        return redirect('/contacts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact= Contact::find($id);
        return view('contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact= Contact::find($id);
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $contact = Contact::find($request->id);
        $contact->prenom = $request->prenom;
        $contact->nom = $request->nom;
        $contact->adresse = $request->adresse;
        $contact->telephone = $request->telephone;
        $contact->Mib = $request->Mib;

        $contact->update();
        return redirect('contacts')->with('status',"contact mis a jour avec success");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact= Contact::find($id);
        $contact->delete();
        return redirect('contacts')->with('status',"contact supprimé avec success");
    }
}
