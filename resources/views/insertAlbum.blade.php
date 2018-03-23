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
<h1>Ajout d'un Album</h1>
<div class="form">
    {{ Form::open(['url' => '/insertAlbum']) }}
        {{ Form::text('name', '', ['placeholder' => 'Titre', 'required' => 'true']) }}
        {{ Form::number('year', '', ['required' => 'true', 'placeholder' => 'Année de sortie']) }}
        {{ Form::select('artist_id', $artistsArray)  }}
        {{ Form::select('genres[]', $genresArray, null, ['multiple' => 'multiple'])  }}
        {{ Form::number('price', '', ['min'=> 0, 'required' => 'true', 'placeholder' => 'Prix']) }} 
        {{ Form::number('stock', '', ['min'=> 0, 'required' => 'true', 'placeholder' => 'Stock']) }}
        {{ Form::submit('Ajouter cet Album') }}
    {{ Form::close() }}
</div>
@stop