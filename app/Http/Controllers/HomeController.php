<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(Request $request)
  {
    $offset = ($request->has('offset')) ? $request->get('offset') : 0;
    $limit = ($request->has('limit')) ? $request->get('limit') : env('POKEMON_LIST_DEFAULT_OFFSET');

    $response = Http::get('https://pokeapi.co/api/v2/pokemon/?limit=' . $limit . '&offset=' . $offset);

    $jsonResponse = json_decode($response->body());

    $pagination = [
      'previous' => !is_null($jsonResponse->previous),
      'next' => !is_null($jsonResponse->next),
      'limit' => $limit,
      'offset' => $offset
    ];

    return view('home', ['data' => $jsonResponse, 'pagination' => $pagination]);
  }

  public function pokemon($pokemonName)
  {
    $response = Http::get('https://pokeapi.co/api/v2/pokemon/' . $pokemonName);
    $jsonResponse = json_decode($response->body());

    return view('pokemon', ['data' => $jsonResponse]);
  }
}