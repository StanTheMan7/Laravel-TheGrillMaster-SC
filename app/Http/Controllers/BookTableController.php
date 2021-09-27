<?php

namespace App\Http\Controllers;

use App\Models\BookTable;
use Illuminate\Http\Request;

class BookTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book_adresse = BookTable::all();
        return view('backoffice.book.tableauBook', compact('book_adresse'));
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
     * @param  \App\Models\BookTable  $bookTable
     * @return \Illuminate\Http\Response
     */
    public function show(BookTable $bookTable)
    {
        return view('backoffice.book.showBook', compact('book_adresse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookTable  $bookTable
     * @return \Illuminate\Http\Response
     */
    public function edit(BookTable $bookTable)
    {
        return view('backoffice.book.editBook', compact('book_adresse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookTable  $bookTable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookTable $bookTable)
    {
        $request->validate([
            'building' => ['required'],
            'adresse' => ['required'],
            'telephone' => ['required']
        ]);

        $bookTable -> building = $request -> building;
        $bookTable -> adresse = $request -> adresse;
        $bookTable -> telephone = $request -> telephone;

        $bookTable -> save();

        return redirect() -> route('bookTable.index') -> with('message', 'Adresse Modifiée !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookTable  $bookTable
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookTable $bookTable)
    {
        $bookTable->delete();
        return redirect()->route("bookTables.index")->with('message','IT WORKS item succesfully deleted');
    }
}
