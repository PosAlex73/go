<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserAchieveRequest;
use App\Http\Requests\UpdateUserAchieveRequest;
use App\Models\UserAchieve;

class UserAchieveController extends Controller
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
     * @param  \App\Http\Requests\StoreUserAchieveRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserAchieveRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserAchieve  $userAchieve
     * @return \Illuminate\Http\Response
     */
    public function show(UserAchieve $userAchieve)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserAchieve  $userAchieve
     * @return \Illuminate\Http\Response
     */
    public function edit(UserAchieve $userAchieve)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserAchieveRequest  $request
     * @param  \App\Models\UserAchieve  $userAchieve
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserAchieveRequest $request, UserAchieve $userAchieve)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserAchieve  $userAchieve
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserAchieve $userAchieve)
    {
        //
    }
}
