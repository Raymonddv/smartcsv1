<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserEnquetes;
use DB;
use Illuminate\Support\Facades\Auth;

class UserEnquetes3Controller extends Controller
{
    public function index()
    {
        return view('userenquete3');
    }

    public function store(Request $request)
    {
      $id=Auth::id();

       DB::table('user_enquetes')
           ->where('id', $id)
           ->update(['place_3_kwaliteit_eten' => $request->input('place_3_kwaliteit_eten')]);

           DB::table('user_enquetes')
           ->where('id', $id)
           ->update(['place_3_prijs_kwaliteit' => $request->input('place_3_prijs_kwaliteit')]);

           DB::table('user_enquetes')
           ->where('id', $id)
           ->update(['place_3_variatie' => $request->input('place_3_variatie')]);

           DB::table('user_enquetes')
           ->where('id', $id)
           ->update(['place_3_sfeer' => $request->input('place_3_sfeer')]);

           DB::table('user_enquetes')
           ->where('id', $id)
           ->update(['place_3_service' => $request->input('place_3_service')]);

           return redirect('home');
   }
}
