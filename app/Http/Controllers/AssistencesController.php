<?php

namespace App\Http\Controllers;

use App\Models\Assistences;
use App\Http\Requests\StoreAssistencesRequest;
use App\Http\Requests\UpdateAssistencesRequest;

class AssistencesController extends Controller
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
     * @param  \App\Http\Requests\StoreAssistencesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssistencesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assistences  $assistences
     * @return \Illuminate\Http\Response
     */
    public function show(Assistences $assistences)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assistences  $assistences
     * @return \Illuminate\Http\Response
     */
    public function edit(Assistences $assistences)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAssistencesRequest  $request
     * @param  \App\Models\Assistences  $assistences
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssistencesRequest $request, Assistences $assistences)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assistences  $assistences
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assistences $assistences)
    {
        //
    }
}
