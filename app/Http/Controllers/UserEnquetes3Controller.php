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
      $id = Auth::id();

      $places = DB::table('user_enquetes')->where('enquete_id', $id)->get();

      return view('userenquete3', compact('places'));
    }

    public function store(Request $request)
    {
      $id=Auth::id();

       DB::table('user_enquetes')
           ->where('enquete_id', $id)
           ->update(['place_3_kwaliteit_eten' => $request->input('place_3_kwaliteit_eten')]);

           DB::table('user_enquetes')
           ->where('enquete_id', $id)
           ->update(['place_3_prijs_kwaliteit' => $request->input('place_3_prijs_kwaliteit')]);

           DB::table('user_enquetes')
           ->where('enquete_id', $id)
           ->update(['place_3_variatie' => $request->input('place_3_variatie')]);

           DB::table('user_enquetes')
           ->where('enquete_id', $id)
           ->update(['place_3_sfeer' => $request->input('place_3_sfeer')]);

           DB::table('user_enquetes')
           ->where('enquete_id', $id)
           ->update(['place_3_service' => $request->input('place_3_service')]);

           return redirect('endpage');
   }
}
