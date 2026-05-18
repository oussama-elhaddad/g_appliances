<?php

namespace App\Http\Controllers;

use App\Models\Pov;
use App\Models\Suivi;
use App\Models\TypePrestation;
use Illuminate\Http\Request;

class SuiviController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $types=TypePrestation::all();
        $povs=Pov::all();
        $suivis=Suivi::simplePaginate(5);
        return view('layouts.suivi.index', compact('suivis','povs','types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $types = TypePrestation::all();
        $povs = Pov::all();
        return view('layouts.suivi.create', compact('types','povs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $suivis = new Suivi;
        $suivis->offre_commercial = $request->input('offre_commercial');
        $suivis->montant = $request->input('montant');
        $suivis->type_prestation_id = $request->input('type_prestation_id');
        $suivis->compte_rendu = $request->input('compte_rendu');
        $suivis->pov_id = $request->input('pov_id');
        $suivis->save();
        return redirect()->route('suivis.index');
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
        $suivis = Suivi::all();
        $types = TypePrestation::all();
        $povs = Pov::all();
        return view('layouts.suivi.edit', compact('suivis','types','povs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $suivis=Suivi::find($id);
        $suivis->delete();
        return redirect()->route('suivis.index');
    }
}
