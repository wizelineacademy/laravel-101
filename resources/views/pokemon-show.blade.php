@extends('layouts.pokeapp')

@section('title', 'Pokemon - ' . $data->name);

@section('content')
    <h2>Pokemon - {{ $data->name }}</h2>

    @php
    var_dump($data);
    @endphp
@endsection
