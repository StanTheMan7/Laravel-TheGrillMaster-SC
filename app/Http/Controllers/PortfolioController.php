<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::all();
        return view('backoffice.chefs.tableauChef', compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.chefs.createChef');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'url' => ['required'],
            'titre' => ['required'],
            'icone' => ['required'],
        ]);

        $table = new Portfolio;

        $table -> url = $request -> file("url") -> hashName();
        $table -> titre = $request -> titre;
        $table -> icone = $request -> icone;

        $table -> save();

        $request -> file("url") -> storePublicly("image", "public");

        return redirect() -> route('portfolio.index') -> with('message', 'Chef créé !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        return view('backoffice.chefs.showChef', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('backoffice.chefs.editChef', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'url' => ['required'],
            'titre' => ['required'],
            'icone' => ['required'],
        ]);

        Storage::disk("public") -> delete("image/" . $portfolio->url);

        $portfolio -> url = $request -> file("url") -> hashName();
        $portfolio -> titre = $request -> titre;
        $portfolio -> icone = $request -> icone;

        $portfolio -> save();

        $request -> file("url") -> storePublicly("image", "public");

        return redirect() -> route('portfolio.index') -> with('message', 'Chef modifié !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        Storage::disk("public") -> delete("image/" . $portfolio->url);
        $portfolio->delete();
        return redirect()->route("portfolios.index")->with('message','IT WORKS item succesfully deleted');
    }
}
