<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserEnquetes;
use DB;

class UserEnquetesController extends Controller
{
    public function index()
    {
        return view('UserEnquete');
    }

    public function store(Request $request)
    {
       DB::table('user_enquetes')
           ->where('id', 1)
           ->update(['place_1_kwaliteit_eten' => $request->input('place_1_kwaliteit_eten')]);

           DB::table('user_enquetes')
           ->where('id', 1)
           ->update(['place_1_prijs_kwaliteit' => $request->input('place_1_prijs_kwaliteit')]);

           DB::table('user_enquetes')
           ->where('id', 1)
           ->update(['place_1_variatie' => $request->input('place_1_variatie')]);

           DB::table('user_enquetes')
           ->where('id', 1)
           ->update(['place_1_sfeer' => $request->input('place_1_sfeer')]);

           DB::table('user_enquetes')
           ->where('id', 1)
           ->update(['place_1_service' => $request->input('place_1_service')]);


   }
}

         // $enquete = new UserEnquetes;
          //$enquete->place_1_kwaliteit_eten = ('place_1_kwaliteit_eten');




         // $user = new User;
          //$user->username = Input::get('username');
          //$user->email = Input::get('email');
          //$user->password = Hash::make(Input::get('password'));
          //$user->save();

    //return Redirect::back();

