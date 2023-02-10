<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function index(){

        $trains = Train::where("orario_di_partenza", ">=", "2023-02-10 00:00:00")->where("orario_di_partenza", "<", "2023-02-11 00:00:00")->get();

        return view("home", compact("trains"));
    }
}
