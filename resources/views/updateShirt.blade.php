@extends('layouts.base')
@section('content')
<h1>Mettre à jour le T-shirt</h1>
{{ Form::open(['url' => '/updateOneShirt']) }}
    {{ Form::hidden('id', $shirt['id']) }}
    {{ Form::text('name', $shirt['name'], ['required' => 'true']) }}
    {{ Form::text('description', $shirt['description'], ['required' => 'true']) }}
    {{ Form::select('size', ['XS' => 'Very Small', 'S' => 'Small', 'M' => 'Medium', 'L' => 'Large', 'XL' => 'Very Large'], $shirt['size']) }}
    {{ Form::number('stock', $shirt['stock'], ['required' => 'true']) }}
    {{ Form::number('price', $shirt['price'], ['required' => 'true']) }} 
    {{ Form::submit('Mettre à jour') }}
{{ Form::close() }}
@stop