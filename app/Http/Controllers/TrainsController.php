<?php

namespace App\Http\Controllers;

use App\Models\Trains;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function index(){
        $trains = Trains::all();
        return view('trains', compact('trains'));
    }
}
