<?php

namespace App\Http\Controllers;

use App\Models\Corrent;
use App\Http\Requests\StoreCorrentRequest;
use App\Http\Requests\UpdateCorrentRequest;

class CorrentController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCorrentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCorrentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Corrent  $corrent
     * @return \Illuminate\Http\Response
     */
    public function show(Corrent $corrent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCorrentRequest  $request
     * @param  \App\Models\Corrent  $corrent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCorrentRequest $request, Corrent $corrent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Corrent  $corrent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Corrent $corrent)
    {
        //
    }
}
