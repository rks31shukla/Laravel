<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function show()
    {
        $user = 'Aadmin';
        $userType = $user == 'Admin' ? true : false;
        return view('Product', ['uType' => $userType]);
    }
}