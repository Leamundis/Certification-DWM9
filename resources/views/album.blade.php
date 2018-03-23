@extends('layouts.base')
@section('title', 'Album')
@section('content')
<nav>
    <ul>
            <li><a href="/genre">Genres</a></li>
            <li><a href="/artist">Artistes</a></li>
    </ul>
</nav>
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
        <th>Titre</th>
        <th>Artiste</th>
        <th>Année de sortie</th>
        <th>Genres</th>
        <th>Prix</th>
        <th>Stock</th>
        <th>Mettre à jour</th>
        <th>Supprimer</th>
        <th>Modification du stock</th>
    </tr>
    @foreach ($albums as $album)
        <tr>
            <td> {{ $album['name'] }} </td>
            <td> {{ $album->artist['name'] }} </td>
            <td> {{ $album['year'] }} </td>
            <td>
                @foreach ($album->genres as $genre)
                    {{ $genre->name }}
                @endforeach
            </td>            
            <td> {{ $album['price'] }} </td>
            <td> {{ $album['stock'] }} </td>
            <td>                    
                {{ Form::open(['url' => '/updateAlbum']) }}
                    {{ Form::hidden('id', $album['id']) }}
                    {{ Form::submit('U') }}
                {{ Form::close() }}
            </td>
            <td>
                {{ Form::open(['url' => '/deleteAlbum']) }}
                    {{ Form::hidden('id', $album->id) }}
                    {{ Form::submit('X') }}
                {{ Form::close() }}
            </td>
            <td>
                {{ Form::open(['url' => '/plusOneAlbum']) }}
                    {{ Form::hidden('id', $album->id) }}
                    {{ Form::submit('+') }}
                {{ Form::close() }}
                @if ($album['stock'] > 0)
                    {{ Form::open(['url' => '/minusOneAlbum']) }}
                        {{ Form::hidden('id', $album->id) }}
                        {{ Form::submit('-') }}
                    {{ Form::close() }} 
                @endif
            </td>
        </tr>
    @endforeach
</table>
<div>
    <a href="/insertAlbum">
    <input type="button" value="Ajouter un Album">
    </a>
</div>
@stop
