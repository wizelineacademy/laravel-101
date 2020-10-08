<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;

class FavoriteController extends Controller
{
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $user = Auth::user();
    $slug = $request->get('slug');

    $favorite = new Favorite();
    $favorite->user_id = $user->id;
    $favorite->slug = $slug;
    $favorite->save();

    return back();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Favorite  $favorite
   * @return \Illuminate\Http\Response
   */
  public function destroy(Favorite $favorite)
  {
    //
  }
}
