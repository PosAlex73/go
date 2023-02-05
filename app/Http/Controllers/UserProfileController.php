<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserProfileRequest;
use App\Http\Requests\UpdateUserProfileRequest;
use App\Models\UserProfile;

class UserProfileController extends Controller
{
    public function index()
    {
        return view('front.profile.index');
    }
}
