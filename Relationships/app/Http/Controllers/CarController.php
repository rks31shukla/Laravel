<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Mechanic;
use App\Models\Owner;
class CarController extends Controller
{
    public function add_car($id)
    {
        $mechanic = Mechanic::find($id);
        $car  = new Car;
        $car->model = 'i10';
        $mechanic->car()->save($car);
    }
}
