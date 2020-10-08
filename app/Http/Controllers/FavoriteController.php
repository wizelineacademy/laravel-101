<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;

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
    dd($request);
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
