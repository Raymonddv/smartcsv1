<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Places;
use DB;
class VragenController extends Controller

{
    public function index()
    {
      $places = places::all();
      return view('vragen', compact('places'));
    }
    public function store(Request $request)
    {
      $id = Auth::id();

      $exists = DB::table('user_enquetes')->where('enquete_id', $id)->first();
      if(!$exists)

      DB::table('user_enquetes')
        ->insert(['enquete_id' => $id]);
      DB::table('user_enquetes')
        ->where('enquete_id', $id)
        ->update(['place_1' => $request->input('place_1')]);
      DB::table('user_enquetes')
        ->where('enquete_id', $id)
        ->update(['place_2' => $request->input('place_2')]);
      DB::table('user_enquetes')
        ->where('enquete_id', $id)
        ->update(['place_3' => $request->input('place_3')]);

        return redirect('userenquete');

   }
}
