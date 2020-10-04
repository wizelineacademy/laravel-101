@extends('layouts.app')

@section('title', strtoupper($data->name))

@section('content')


@php
var_dump($data);
@endphp

@endsection
