@extends('layouts.base')
@section('title', 'Album')
@section('content')
<nav>
    <ul>
            <li><a href="/genre">Genres</a></li>
            <li><a href="/artist">Artistes</a></li>
    </ul>
</nav>
<h1>Ajout d'un Album</h1>
{{ Form::open(['url' => '/updateOneAlbum']) }}
    {{ Form::hidden('id', $album['id']) }}
    {{ Form::text('name', $album['name'], ['required' => 'true']) }}
    {{ Form::number('year', $album['year'], ['required' => 'true']) }}
    {{ Form::select('artist_id', $artistsArray, $album->artist_id)  }}
    {{ Form::select('genres[]', $genresArray, $album->genres, ['multiple' => 'multiple'])  }}
    {{ Form::number('price', $album['price'], ['required' => 'true']) }} 
    {{ Form::number('stock', $album['stock'], ['required' => 'true']) }}
    {{ Form::submit('Mettre à jour cet Album') }}
{{ Form::close() }}
@stop