@extends('layouts.base')
@section('title', 'T-shirt')
@section('content')
<h1>Mettre à jour le T-shirt</h1>
<div class="form">
    {{ Form::open(['url' => '/updateOneShirt']) }}
        {{ Form::hidden('id', $shirt['id']) }}
        {{ Form::text('name', $shirt['name'], ['required' => 'true']) }}
        {{ Form::text('description', $shirt['description'], ['required' => 'true']) }}
        {{ Form::select('size', ['XS' => 'Very Small', 'S' => 'Small', 'M' => 'Medium', 'L' => 'Large', 'XL' => 'Very Large'], $shirt['size']) }}
        {{ Form::number('stock', $shirt['stock'], ['min'=> 0, 'required' => 'true']) }}
        {{ Form::number('price', $shirt['price'], ['min'=> 0, 'required' => 'true']) }} 
        {{ Form::submit('Mettre à jour') }}
    {{ Form::close() }}
</div>
@stop