<?php

namespace App\Http\Controllers;

use App\Models\WarmWelcome;
use Illuminate\Http\Request;

class WarmWelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warmWelcome = WarmWelcome::all();
        return view('backoffice.about.tableauAbout', compact('warmWelcome'));
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
     * @param  \App\Models\WarmWelcome  $warmWelcome
     * @return \Illuminate\Http\Response
     */
    public function show(WarmWelcome $warmWelcome)
    {
        return view('backoffice.about.showAbout', compact('warmWelcome'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WarmWelcome  $warmWelcome
     * @return \Illuminate\Http\Response
     */
    public function edit(WarmWelcome $warmWelcome)
    {
        return view('backoffice.about.editAbout', compact('warmWelcome'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WarmWelcome  $warmWelcome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WarmWelcome $warmWelcome)
    {
        $request->validate([
            'titre' => ['required'],
            'description_grand' => ['required'],
            'description_petit' => ['required'],
        ]);

        $warmWelcome -> titre = $request -> titre;
        $warmWelcome -> description_grand = $request -> description_grand;
        $warmWelcome -> description_petit = $request -> description_petit;

        $warmWelcome -> save();

        return redirect() -> route('warmWelcome.index') -> with('message', 'Element modifié !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WarmWelcome  $warmWelcome
     * @return \Illuminate\Http\Response
     */
    public function destroy(WarmWelcome $warmWelcome)
    {
        $warmWelcome->delete();
        return redirect()->route("warmWelcomes.index")->with('message','IT WORKS item succesfully deleted');
    }
}
