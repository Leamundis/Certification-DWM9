@extends('layouts.base')
@section('title', 'T-shirt')
@section('content')
<h1>Ajout d'un T-shirt</h1>
{{ Form::open(['url' => '/insertShirt']) }}
    {{ Form::text('name', '', ['placeholder' => 'Nom', 'required' => 'true']) }}
    {{ Form::text('description', '', ['placeholder' => 'Description', 'required' => 'true']) }}
    {{ Form::select('size', ['XS' => 'Very Small', 'S' => 'Small', 'M' => 'Medium', 'L' => 'Large', 'XL' => 'Very Large']) }}
    {{ Form::number('stock', '', ['required' => 'true']) }}
    {{ Form::number('price', '', ['required' => 'true']) }} 
    {{ Form::submit('Ajouter ce T-shirt') }}
{{ Form::close() }}
@stop