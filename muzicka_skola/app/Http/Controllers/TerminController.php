<?php

namespace App\Http\Controllers;

use App\Http\Resources\TerminResource;
use App\Models\Termin;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class TerminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TerminResource::collection(Termin::all());
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
     * @param  \App\Models\Termin  $termin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new TerminResource(Termin::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Termin  $termin
     * @return \Illuminate\Http\Response
     */
    public function edit(Termin $termin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Termin  $termin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Termin $termin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Termin  $termin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Termin $termin)
    {
        //
    }
}
