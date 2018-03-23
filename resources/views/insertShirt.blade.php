@extends('layouts.base')
@section('title', 'T-shirt')
@section('content')
<h1>Ajout d'un T-shirt</h1>
<div class="form">
    {{ Form::open(['url' => '/insertShirt']) }}
        {{ Form::text('name', '', ['placeholder' => 'Nom', 'required' => 'true']) }}
        {{ Form::text('description', '', ['placeholder' => 'Description', 'required' => 'true']) }}
        {{ Form::select('size', ['XS' => 'Very Small', 'S' => 'Small', 'M' => 'Medium', 'L' => 'Large', 'XL' => 'Very Large']) }}
        {{ Form::number('price', '', ['min'=> 0, 'required' => 'true', 'placeholder' => 'Prix']) }} 
        {{ Form::number('stock', '', ['min'=> 0, 'required' => 'true', 'placeholder' => 'Stock']) }}
        {{ Form::submit('Ajouter ce T-shirt') }}
    {{ Form::close() }}
</div>
@stop