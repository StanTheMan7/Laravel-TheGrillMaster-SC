<?php

namespace App\Http\Controllers;

use App\Models\Heure;
use Illuminate\Http\Request;

class HeureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heure = Heure::all();
        return view('backoffice.book2.tableauBook', compact('heure'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Heure  $heure
     * @return \Illuminate\Http\Response
     */
    public function show(Heure $heure)
    {
        return view('backoffice.book2.showBook', compact('heure'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Heure  $heure
     * @return \Illuminate\Http\Response
     */
    public function edit(Heure $heure)
    {
        return view('backoffice.book2.editBook', compact('heure'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Heure  $heure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Heure $heure)
    {
        $request->validate([
            'jour' => ['requested'],
            'heure' => ['requested']
        ]);

        $heure -> jour = $request -> jour;
        $heure -> heure = $request -> heure;

        $heure -> save();

        return redirect() -> route('heure.index') -> with('message', 'Horaire modifié !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Heure  $heure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Heure $heure)
    {
        $heure->delete();
        return redirect()->route("heures.index")->with('message','IT WORKS item succesfully deleted');
    }
}
