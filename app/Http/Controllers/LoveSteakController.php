<?php

namespace App\Http\Controllers;

use App\Models\LoveSteak;
use Illuminate\Http\Request;

class LoveSteakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loveSteak = LoveSteak::all();
        return view('backoffice.about2.tableauAbout', compact('loveSteak'));
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
     * @param  \App\Models\LoveSteak  $loveSteak
     * @return \Illuminate\Http\Response
     */
    public function show(LoveSteak $loveSteak)
    {
        return view('backoffice.about2.showAbout', compact('loveSteak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoveSteak  $loveSteak
     * @return \Illuminate\Http\Response
     */
    public function edit(LoveSteak $loveSteak)
    {
        return view('backoffice.about2.editAbout', compact('loveSteak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LoveSteak  $loveSteak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoveSteak $loveSteak)
    {
        $request->validate([
            'titre' => ['requested'],
            'description' => ['requested'],
            'bouton' => ['requested']
        ]);

        $loveSteak -> titre = $request -> titre;
        $loveSteak -> description = $request -> description;
        $loveSteak -> bouton = $request -> bouton;

        $loveSteak -> save();

        return redirect() -> route('lovesteak.index') -> with('message', 'Elément changé !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoveSteak  $loveSteak
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoveSteak $loveSteak)
    {
        //
    }
}
