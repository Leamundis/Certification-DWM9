@extends('layouts.base')
@section('title', 'Album')
@section('nav')
<nav class="nav2">
    <ul>
            <li><a href="/genre">Genres</a></li>
            <li><a href="/artist">Artistes</a></li>
    </ul>
</nav>
@stop

@section('content')
<h1>Mettre à jour l'Album</h1>
<div class="form">
    {{ Form::open(['url' => '/updateOneAlbum']) }}
        {{ Form::hidden('id', $album['id']) }}
        {{ Form::text('name', $album['name'], ['required' => 'true']) }}
        {{ Form::number('year', $album['year'], ['required' => 'true']) }}
        {{ Form::select('artist_id', $artistsArray, $album->artist_id)  }}
        {{ Form::select('genres[]', $genresArray, $album->genres, ['multiple' => 'multiple'])  }}
        {{ Form::number('price', $album['price'], ['min'=> 0, 'required' => 'true']) }} 
        {{ Form::number('stock', $album['stock'], ['min'=> 0, 'required' => 'true']) }}
        {{ Form::submit('Mettre à jour cet Album') }}
    {{ Form::close() }}
</div>
@stop