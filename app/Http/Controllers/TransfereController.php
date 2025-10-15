<?php

namespace App\Http\Controllers;
use App\Models\Transfere;
use App\Http\Requests\StoreTransfereRequest;
use App\Http\Requests\UpdateTransfereRequest;

class TransfereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $liste = Transfere::all();

        return view('transferes.index',compact('liste'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transferes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransfereRequest $request)
    {
        $request->validate([
            'montant' => 'required',
            'type-transfert' => 'required',
            'rib-source' => 'required',
            'rib-destination' => 'required',
            'compte_id' => 'required',
        ]);
        $transfere = new Transfere();
        $transfere->montant = $request->montant;
        $transfere->type = $request->type-transfert;
        $transfere->rib-source =$request->rib-source;
        $transfere->rib-destination = $request->rib-destination;
        $transfere->compte_id = $request->compte_id;
        $transfere->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Transfere $transfere)
    {
        return view('transferes.show', compact('transfere'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transfere $transfere)
    {
        return view('transferes.edit', compact('transfere'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransfereRequest $request, Transfere $transfere)
    {
        //mise a jour du rib
        $transfere->montant = $request->montant;
        $transfere->type = $request->type-transfert;
        $transfere->rib-source = $request->rib-source;
        $transfere->rib-destination = $request->rib-destination;
        $transfere->save();
        return redirect('/transferes')->with('success', 'Transfert mis à jour avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transfere $transfere)
    {
        $transfere->delete();
        return redirect('/transferes')->with('success', 'Transfert supprimé avec success');
    }
}