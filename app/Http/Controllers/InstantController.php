<?php

namespace App\Http\Controllers;

use App\Models\instant;
use App\Http\Requests\StoreinstantRequest;
use App\Http\Requests\UpdateinstantRequest;

class InstantController extends Controller
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
     * @param  \App\Http\Requests\StoreinstantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreinstantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\instant  $instant
     * @return \Illuminate\Http\Response
     */
    public function show(instant $instant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\instant  $instant
     * @return \Illuminate\Http\Response
     */
    public function edit(instant $instant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateinstantRequest  $request
     * @param  \App\Models\instant  $instant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateinstantRequest $request, instant $instant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\instant  $instant
     * @return \Illuminate\Http\Response
     */
    public function destroy(instant $instant)
    {
        //
    }
}
