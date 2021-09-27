<?php

namespace App\Http\Controllers;

use App\Models\HappyCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HappyCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $happyCustomer = HappyCustomer::all();
        return view('backoffice.happy.tableauHappy', compact('happyCustomer'));
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
     * @param  \App\Models\HappyCustomer  $happyCustomer
     * @return \Illuminate\Http\Response
     */
    public function show(HappyCustomer $happyCustomer)
    {
        return view('backoffice.happy.showHappy', compact('happyCustomer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HappyCustomer  $happyCustomer
     * @return \Illuminate\Http\Response
     */
    public function edit(HappyCustomer $happyCustomer)
    {
        return view('backoffice.happy.editHappy', compact('happyCustomer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HappyCustomer  $happyCustomer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HappyCustomer $happyCustomer)
    {
        $request->validate([
            'url' => ['required'],
            'titre' => ['required'],
            'icone' => ['required'],
            'description' => ['required'],
        ]);

        Storage::disk("public") -> delete("image/" . $happyCustomer->url);

        $happyCustomer -> url = $request -> file("url") -> hashName();
        $happyCustomer -> titre = $request -> titre;
        $happyCustomer -> icone = $request -> icone;
        $happyCustomer -> description = $request -> description;

        $happyCustomer -> save();

        $request -> file("url") -> storePublicly("image", "public");

        return redirect() -> route('happycustomer.index') -> with('message', 'Client modifié !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HappyCustomer  $happyCustomer
     * @return \Illuminate\Http\Response
     */
    public function destroy(HappyCustomer $happyCustomer)
    {
        Storage::disk("public") -> delete("image/" . $happyCustomer->url);
        $happyCustomer->delete();
        return redirect()->route("happyCustomers.index")->with('message','IT WORKS item succesfully deleted');
    }
}
