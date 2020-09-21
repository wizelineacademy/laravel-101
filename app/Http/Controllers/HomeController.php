<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    $response = Http::get('https://pokeapi.co/api/v2/pokemon/');

    $jsonResponse = json_decode($response->body());

    return view('home', ['data' => $jsonResponse]);
  }

  public function pokemon($pokemonName)
  {
    $response = Http::get('https://pokeapi.co/api/v2/pokemon/' . $pokemonName);
    $jsonResponse = json_decode($response->body());

    return view('pokemon', ['data' => $jsonResponse]);
  }
}