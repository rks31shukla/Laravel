<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function getCustomer($id)
    {
        $customer = Mobile::find($id)->customer;
        return $customer;
    }
}
