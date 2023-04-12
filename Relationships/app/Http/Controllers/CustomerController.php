<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Mobile;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function addCustomer()
    {
        $mobile =  new Mobile();
        $mobile->model = 'LG101';

        $customer = new Customer();
        $customer->name = 'sonam';
        $customer->email = 'sonam@gmail.com';

        $customer->save();
        $customer->mobile()->save($mobile);
    }

    public function showMobile($id)
    {
        $mobile = Customer::find($id)->mobile;
        return $mobile;
    }

    
}
