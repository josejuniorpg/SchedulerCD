<?php

namespace App\Http\Controllers;

use App\Models\MissingCategorie;
use App\Http\Requests\StoreMissingCategorieRequest;
use App\Http\Requests\UpdateMissingCategorieRequest;

class MissingCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreMissingCategorieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMissingCategorieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MissingCategorie  $missingCategorie
     * @return \Illuminate\Http\Response
     */
    public function show(MissingCategorie $missingCategorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MissingCategorie  $missingCategorie
     * @return \Illuminate\Http\Response
     */
    public function edit(MissingCategorie $missingCategorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMissingCategorieRequest  $request
     * @param  \App\Models\MissingCategorie  $missingCategorie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMissingCategorieRequest $request, MissingCategorie $missingCategorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MissingCategorie  $missingCategorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(MissingCategorie $missingCategorie)
    {
        //
    }
}
