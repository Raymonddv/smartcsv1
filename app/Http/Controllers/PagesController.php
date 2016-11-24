<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
      return view('about');
    }

    public function vragen()
    {
      return view('vragen');
    }

    public function inleiding()
      {
        return view('inleiding');
        }

    public function disclaimer()
        {
        return view('disclaimer');
        }

        public function endpage()
            {
            return view('endpage');
            }
  }
