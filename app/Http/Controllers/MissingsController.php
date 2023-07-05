<?php

namespace App\Http\Controllers;

use App\Models\Missings;
use App\Http\Requests\StoreMissingsRequest;
use App\Http\Requests\UpdateMissingsRequest;

class MissingsController extends Controller
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
     * @param  \App\Http\Requests\StoreMissingsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMissingsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Missings  $missings
     * @return \Illuminate\Http\Response
     */
    public function show(Missings $missings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Missings  $missings
     * @return \Illuminate\Http\Response
     */
    public function edit(Missings $missings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMissingsRequest  $request
     * @param  \App\Models\Missings  $missings
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMissingsRequest $request, Missings $missings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Missings  $missings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Missings $missings)
    {
        //
    }
}
