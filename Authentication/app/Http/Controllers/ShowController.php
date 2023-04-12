<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show()
    {
        return Auth::user()->id;
    }
    public function checkAuthUser()
    {
        if (Auth::check()) {
            return 'Authenticated';
        }
        return 'unauthenticated';
    }
}
