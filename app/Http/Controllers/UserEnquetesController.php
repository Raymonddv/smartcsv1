<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserEnquetes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class UserEnquetesController extends Controller
{
    public function index()
    {
      $id = Auth::id();

      $places = DB::table('user_enquetes')->where('enquete_id', $id)->get();

      return view('userenquete', compact('places'));
    }

    public function store(Request $request)
    {
      $id=Auth::id();

       DB::table('user_enquetes')
           ->where('enquete_id', $id)
           ->update(['place_1_kwaliteit_eten' => $request->input('place_1_kwaliteit_eten')]);

           DB::table('user_enquetes')
           ->where('enquete_id', $id)
           ->update(['place_1_prijs_kwaliteit' => $request->input('place_1_prijs_kwaliteit')]);

           DB::table('user_enquetes')
           ->where('enquete_id', $id)
           ->update(['place_1_variatie' => $request->input('place_1_variatie')]);

           DB::table('user_enquetes')
           ->where('enquete_id', $id)
           ->update(['place_1_sfeer' => $request->input('place_1_sfeer')]);

           DB::table('user_enquetes')
           ->where('enquete_id', $id)
           ->update(['place_1_service' => $request->input('place_1_service')]);

           return redirect('userenquete2');
   }
}
