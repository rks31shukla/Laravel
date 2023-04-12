<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;

class FormRequestController extends Controller
{
    function showForm()
    {
        return view("formRequestValidation");
    }
    function signup(RegistrationRequest $req)
    {
        $req->validated();
        return view('formRequestValidation');
    }
}
