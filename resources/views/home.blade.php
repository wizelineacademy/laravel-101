@extends('layouts.app')

@section('title', 'Home')

@section('content')

<h2>Pokemon List</h2>
<table class="table">
<thead>
<tr>
<th scope="col">
</tr>
</thead>
</table>
<ul id="pokemon-list">
@foreach ($data->results as $pokemon)
<li><a href="/pokemon/{{ $pokemon->name }}">{{ strtoupper($pokemon->name) }}</a></li>
@endforeach
</ul>

@if ($pagination['previous'])
<a href="/?offset={{ $pagination['offset'] - $pagination['limit'] }}&limit={{ $pagination['limit'] }}">Previous</a>
@endif

@if ($pagination['next'])
<a href="/?offset={{ $pagination['offset'] + $pagination['limit'] }}&limit={{ $pagination['limit'] }}">Next</a>
@endif

@php
var_dump([$data, $pagination]);
@endphp

@endsection