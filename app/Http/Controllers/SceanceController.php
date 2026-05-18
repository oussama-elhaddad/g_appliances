<?php

namespace App\Http\Controllers;

use App\Models\Pov;
use App\Models\Sceance;
use Illuminate\Http\Request;
use App\Models\TypePrestation;

class SceanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sceances=Sceance::simplePaginate(10);
        return view('layouts.sceance.index', compact('sceances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $povs = Pov::all();
        $sceances = Sceance::all();
        return view('layouts.sceance.create', compact('povs','sceances'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $sceances = new Sceance;
        $sceances->date_sceance = $request->input('date_sceance');
        $sceances->pov_id = $request->input('pov_id');
        $sceances->resumer = $request->input('resumer');
        $sceances->participant = $request->input('participant');
        $sceances->save();
        return redirect()->route('sceances.index');
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
        $sceances = Sceance::find($id);
        $types = TypePrestation::all();
        return view('layouts.sceance.edit', compact('sceances', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $sceances = Sceance::find($id);
        $sceances->date_sceance = $request->input('date_sceance');
        $sceances->resumer = $request->input('resumer');
        $sceances->participant = $request->input('participant');
        $sceances->save();
        return redirect()->route('sceances.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $sceances=Sceance::find($id);
        $sceances->delete();
        return redirect()->route('sceances.index');
    }
}
