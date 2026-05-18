<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients=client::simplePaginate(5);
        return view('layouts.client.index',['clients'=>$clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $client = new Client;
        $client->libelle = $request->input('libelle');
        $client->secteur = $request->input('secteur');
        $client->activite = $request->input('activite');
        $client->save();
        return redirect()->route('clients.index');
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
        $clients=Client::find($id);
        return view('layouts.client.edit',['clients'=>$clients]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $client = Client::find($id);
        $client->libelle = $request->input('libelle');
        $client->secteur = $request->input('secteur');
        $client->activite = $request->input('activite');
        $client->save();
        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clients=Client::find($id);
        $clients->delete();
        return redirect()->route('clients.index');
    }
}
