<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Places;

class VragenController extends Controller
{
    public function index()
    {
      $places = places::all();
      return view('vragen', compact('places'));
    }
}
