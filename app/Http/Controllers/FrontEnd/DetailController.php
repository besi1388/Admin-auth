<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\User; 
use App\Models\Vehicle;
use App\Models\Make;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function getData(Request $request){
        $vehicles = Vehicle::all();

        return view('welcome', [
            'vehicles' => $vehicles,
        ]);

    }
}
