@extends('layouts.app')

@section('title', 'Home')

@section('content')

<ul id="pokemon-list">
@foreach ($data->results as $pokemon)
<li><a href="/pokemon/{{ $pokemon->name }}">{{ strtoupper($pokemon->name) }}</a></li>
@endforeach
</ul>

@php
var_dump($data);
@endphp

@endsection