<?php

namespace App\Http\Controllers;

use App\Models\Matter;
use App\Http\Requests\StoreMatterRequest;
use App\Http\Requests\UpdateMatterRequest;

class MatterController extends Controller
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
     * @param  \App\Http\Requests\StoreMatterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMatterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matter  $matter
     * @return \Illuminate\Http\Response
     */
    public function show(Matter $matter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matter  $matter
     * @return \Illuminate\Http\Response
     */
    public function edit(Matter $matter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMatterRequest  $request
     * @param  \App\Models\Matter  $matter
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMatterRequest $request, Matter $matter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matter  $matter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matter $matter)
    {
        //
    }
}
