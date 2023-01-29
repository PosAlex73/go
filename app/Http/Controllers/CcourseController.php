<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCcourseRequest;
use App\Http\Requests\UpdateCcourseRequest;
use App\Models\Ccourse;

class CcourseController extends Controller
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
     * @param  \App\Http\Requests\StoreCcourseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCcourseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ccourse  $ccourse
     * @return \Illuminate\Http\Response
     */
    public function show(Ccourse $ccourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ccourse  $ccourse
     * @return \Illuminate\Http\Response
     */
    public function edit(Ccourse $ccourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCcourseRequest  $request
     * @param  \App\Models\Ccourse  $ccourse
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCcourseRequest $request, Ccourse $ccourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ccourse  $ccourse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ccourse $ccourse)
    {
        //
    }
}
