@extends('layouts.base')
@section('title', 'T-shirt')
@section('content')
@if(Session::has('success'))
        <div>{{ session('success') }}</div>
@endif
<div>
    <a href="/insertShirt">
    <input type="button" value="Ajouter un T-shirt">
    </a>
</div>
<table>
    <tr>
        <th>Nom</th>
        <th>Description</th>
        <th>Taille</th>
        <th>Prix</th>
        <th>Stock</th>
        <th>Mettre à jour</th>
        <th>Supprimer</th>
        <th>Modification du stock</th>
    </tr>
    @foreach ($shirts as $shirt)
        <tr>
            <td> {{ $shirt['name'] }} </td>
            <td> {{ $shirt['description'] }} </td>
            <td> {{ $shirt['size'] }} </td>
            <td> {{ $shirt['price'] }} </td>
            <td> {{ $shirt['stock'] }} </td>
            <td>                    
                {{ Form::open(['url' => '/updateShirt']) }}
                    {{ Form::hidden('id', $shirt['id']) }}
                    {{ Form::submit('U') }}
                {{ Form::close() }}
            </td>
            <td>
                {{ Form::open(['url' => '/deleteShirt']) }}
                    {{ Form::hidden('id', $shirt->id) }}
                    {{ Form::submit('X') }}
                {{ Form::close() }}
            </td>
            <td>
                {{ Form::open(['url' => '/plusOneShirt']) }}
                    {{ Form::hidden('id', $shirt->id) }}
                    {{ Form::submit('+') }}
                {{ Form::close() }}
                @if ($shirt['stock'] > 0)
                    {{ Form::open(['url' => '/minusOneShirt']) }}
                        {{ Form::hidden('id', $shirt->id) }}
                        {{ Form::submit('-') }}
                    {{ Form::close() }} 
                @endif
            </td>
        </tr>
    @endforeach
</table>
<div>
    <a href="/insertShirt">
    <input type="button" value="Ajouter un T-shirt">
    </a>
</div>
@stop