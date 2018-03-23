@extends('layouts.base')
@section('content')
@if(Session::has('success'))
        <div>{{ session('success') }}</div>
@endif
<div>
    <a href="/insertAlbum">
    <input type="button" value="Ajouter un Album">
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
    @foreach ($albums as $album)
        <tr>
            <td> {{ $album['name'] }} </td>
            <td> {{ $album['description'] }} </td>
            <td> {{ $album['size'] }} </td>
            <td> {{ $album['price'] }} </td>
            <td> {{ $album['stock'] }} </td>
            <td>                    
                {{ Form::open(['url' => '/updatealbum']) }}
                    {{ Form::hidden('id', $album['id']) }}
                    {{ Form::submit('U') }}
                {{ Form::close() }}
            </td>
            <td>
                {{ Form::open(['url' => '/deletealbum']) }}
                    {{ Form::hidden('id', $album->id) }}
                    {{ Form::submit('X') }}
                {{ Form::close() }}
            </td>
            <td>
                {{ Form::open(['url' => '/plusOnalbum']) }}
                    {{ Form::hidden('id', $album->id) }}
                    {{ Form::submit('+') }}
                {{ Form::close() }}
                @if ($album['stock'] > 0)
                    {{ Form::open(['url' => '/minusOnalbum']) }}
                        {{ Form::hidden('id', $album->id) }}
                        {{ Form::submit('-') }}
                    {{ Form::close() }} 
                @endif
            </td>
        </tr>
    @endforeach
</table>
<div>
    <a href="/insertalbum">
    <input type="button" value="Ajouter un T-album">
    </a>
</div>
@stop
