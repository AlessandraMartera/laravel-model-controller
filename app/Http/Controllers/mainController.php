<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\movie;

class mainController extends Controller
{
    public function index(){

        $movie = movie :: all();

        return view('home');
    }
}
