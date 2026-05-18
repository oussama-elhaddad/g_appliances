<?php

namespace App\Http\Controllers;

use App\Models\Appliance;
use App\Models\Client;
use App\Models\Pov;
use Illuminate\Http\Request;

class PovController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $povs = Pov::simplePaginate(5);
        return view('layouts.pov.index', compact('povs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $appliances = Appliance::all();
        $clients =  Client::all();
        $povs = Pov::all();
        return view('layouts.pov.create', compact('appliances', 'clients', 'povs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $povs = new Pov;
        $povs->appliance_id = $request->input('appliance_id');
        $povs->client_id = $request->input('client_id');
        $povs->date_debut = $request->input('date_debut');
        $povs->date_fin = $request->input('date_fin');
        $povs->description = $request->input('description');
        $povs->compte_manager = $request->input('compte_manager');
        $povs->ingenieur_cybersecurite = $request->input('ingenieur_cybersecurite');
        $povs->analyse_cybersecurite = $request->input('analyse_cybersecurite');
        $povs->libelle_pov = $request->input('libelle_pov');
        $povs->save();
        return redirect()->route('povs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $povs = Pov::find($id);
        $appliances = Appliance::all();
        $clients = Client::all();
        return view('layouts.pov.edit', compact('povs', 'appliances', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $povs = Pov::find($id);
        $povs->appliance_id = $request->input('appliance_id');
        $povs->client_id = $request->input('client_id');
        $povs->date_debut = $request->input('date_debut');
        $povs->date_fin = $request->input('date_fin');
        $povs->description = $request->input('description');
        $povs->compte_manager = $request->input('compte_manager');
        $povs->ingenieur_cybersecurite = $request->input('ingenieur_cybersecurite');
        $povs->analyse_cybersecurite = $request->input('analyse_cybersecurite');
        $povs->libelle_pov = $request->input('libelle_pov');
        $povs->save();
        return redirect()->route('povs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $povs = Pov::find($id);
        $povs->delete();
        return redirect()->route('povs.index');
    }
}
