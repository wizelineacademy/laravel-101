<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    $offset = $request->input('offset', 0);
    $limit = $request->input('limit', env('POKEMON_LIST_DEFAULT_OFFSET'));
    $limit = ($request->has('limit')) ? $request->get('limit') : env('POKEMON_LIST_DEFAULT_OFFSET');

    $response = Http::get('https://pokeapi.co/api/v2/pokemon/?limit=' . $limit . '&offset=' . $offset);

    $jsonResponse = json_decode($response->body());

    $pagination = [
      'previous' => !is_null($jsonResponse->previous),
      'next' => !is_null($jsonResponse->next),
      'limit' => $limit,
      'offset' => $offset
    ];

    $user = (Auth::check()) ? Auth::user() : false;

    return view('pokemon-index', ['data' => $jsonResponse, 'pagination' => $pagination, 'user' => $user]);
  }

  /**
   * Display the specified resource.
   *
   * @param  string  $slug
   * @return \Illuminate\Http\Response
   */
  public function show($slug)
  {
    $response = Http::get('https://pokeapi.co/api/v2/pokemon/' . $slug);
    $jsonResponse = json_decode($response->body());

    return view('pokemon-show', ['data' => $jsonResponse]);
  }
}
