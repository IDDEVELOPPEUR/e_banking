<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use App\Http\Requests\StoreCompteRequest;
use App\Http\Requests\UpdateCompteRequest;

class CompteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $liste = Compte::all();

        return view('comptes.index',compact('liste'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comptes.create');
    }

    public function store(StoreCompteRequest $request)
    {
        //compte de user authentifié
        $compte = new Compte();
        $compte->rib = $request->rib;
        $compte->user_id = auth()->user()->id;
        $compte->save();
        return redirect('/comptes')->with('success', 'Compte créé avec success');


    }

    /**
     * Display the specified resource.
     */
    public function show(Compte $compte)
    {
        return view('comptes.show', compact('compte'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Compte $compte)
    {
        return view('comptes.edit', compact('compte'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompteRequest $request, Compte $compte)
    {
        //mise a jour du rib
        $compte->rib = $request->rib;
        $compte->save();
        return redirect('/comptes')->with('success', 'Compte mis à jour avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Compte $compte)
    {
        $compte->delete();
        return redirect('/comptes')->with('success', 'Compte supprimé avec success');

    }
}