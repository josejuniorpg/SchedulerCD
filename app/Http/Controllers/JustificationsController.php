<?php

namespace App\Http\Controllers;

use App\Models\Justifications;
use App\Http\Requests\StoreJustificationsRequest;
use App\Http\Requests\UpdateJustificationsRequest;

class JustificationsController extends Controller
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
     * @param  \App\Http\Requests\StoreJustificationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJustificationsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Justifications  $justifications
     * @return \Illuminate\Http\Response
     */
    public function show(Justifications $justifications)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Justifications  $justifications
     * @return \Illuminate\Http\Response
     */
    public function edit(Justifications $justifications)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJustificationsRequest  $request
     * @param  \App\Models\Justifications  $justifications
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJustificationsRequest $request, Justifications $justifications)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Justifications  $justifications
     * @return \Illuminate\Http\Response
     */
    public function destroy(Justifications $justifications)
    {
        //
    }
}
