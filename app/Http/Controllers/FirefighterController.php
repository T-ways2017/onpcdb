<?php

namespace App\Http\Controllers;

use App\Models\Firefighter;
use App\Http\Requests\StoreFirefighterRequest;
use App\Http\Requests\UpdateFirefighterRequest;

class FirefighterController extends Controller
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
     * @param  \App\Http\Requests\StoreFirefighterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFirefighterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Firefighter  $firefighter
     * @return \Illuminate\Http\Response
     */
    public function show(Firefighter $firefighter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Firefighter  $firefighter
     * @return \Illuminate\Http\Response
     */
    public function edit(Firefighter $firefighter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFirefighterRequest  $request
     * @param  \App\Models\Firefighter  $firefighter
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFirefighterRequest $request, Firefighter $firefighter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Firefighter  $firefighter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Firefighter $firefighter)
    {
        //
    }
}
