<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class HomeController extends Controller
{
    public function index(){
      // select * from cars;
      $cars = Car::all();
      dd($cars);
      return view('home');
    }
}
