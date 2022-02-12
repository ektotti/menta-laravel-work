@extends('layouts.base')

@section('mainManu')
<span class="me-2"> {{$name}} </span>
<a class="text-muted" href="">logout</a>
@endsection

@section('title','Dashboard')

@section('mainContent')
<p>you are logged in!</p>
@endsection