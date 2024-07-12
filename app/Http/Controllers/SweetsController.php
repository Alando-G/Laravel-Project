<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sweet;

class SweetsController extends Controller
{
    //
    public function index (){
        // SELECT * from 'sweets';
        // Laravel Eloquent ORM SQL OOP

        $sweets = Sweet::all();
        // $sweets = ["ksl","Mr.Berry","IceCool","cadbury"];
        return view('menu')->with('sweets',$sweets);
    }
}
