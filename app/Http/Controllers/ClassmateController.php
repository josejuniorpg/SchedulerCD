<?php

namespace App\Http\Controllers;

use App\Models\Classmate;
use App\Http\Requests\StoreClassmateRequest;
use App\Http\Requests\UpdateClassmateRequest;

class ClassmateController extends Controller
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
     * @param  \App\Http\Requests\StoreClassmateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClassmateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classmate  $classmate
     * @return \Illuminate\Http\Response
     */
    public function show(Classmate $classmate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classmate  $classmate
     * @return \Illuminate\Http\Response
     */
    public function edit(Classmate $classmate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClassmateRequest  $request
     * @param  \App\Models\Classmate  $classmate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClassmateRequest $request, Classmate $classmate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classmate  $classmate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classmate $classmate)
    {
        //
    }
}
