<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Staff;
use App\Departament;

class HomeController extends Controller
{
    public function index(){
        //dd(Staff::all());
        return view('home',[
            'stafers' => Staff::all(),
            'departam' => Departament::all(),
        ]);
    }
}
