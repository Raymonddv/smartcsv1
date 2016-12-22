<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class UserEnquetes2Controller extends Controller
{
    public function index()
    {
        return view('userenquete2');
    }

    public function store(Request $request)
    {
      $id=Auth::id();

       DB::table('user_enquetes')
           ->where('enquete_id', $id)
           ->update(['place_2_kwaliteit_eten' => $request->input('place_2_kwaliteit_eten')]);

           DB::table('user_enquetes')
           ->where('enquete_id', $id)
           ->update(['place_2_prijs_kwaliteit' => $request->input('place_2_prijs_kwaliteit')]);

           DB::table('user_enquetes')
           ->where('enquete_id', $id)
           ->update(['place_2_variatie' => $request->input('place_2_variatie')]);

           DB::table('user_enquetes')
           ->where('enquete_id', $id)
           ->update(['place_2_sfeer' => $request->input('place_2_sfeer')]);

           DB::table('user_enquetes')
           ->where('enquete_id', $id)
           ->update(['place_2_service' => $request->input('place_2_service')]);

           return redirect('userenquete3');
   }
}

