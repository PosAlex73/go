<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePathNoteRequest;
use App\Http\Requests\UpdatePathNoteRequest;
use App\Models\PathNote;

class PathNoteController extends Controller
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
     * @param  \App\Http\Requests\StorePathNoteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePathNoteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PathNote  $pathNote
     * @return \Illuminate\Http\Response
     */
    public function show(PathNote $pathNote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PathNote  $pathNote
     * @return \Illuminate\Http\Response
     */
    public function edit(PathNote $pathNote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePathNoteRequest  $request
     * @param  \App\Models\PathNote  $pathNote
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePathNoteRequest $request, PathNote $pathNote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PathNote  $pathNote
     * @return \Illuminate\Http\Response
     */
    public function destroy(PathNote $pathNote)
    {
        //
    }
}
