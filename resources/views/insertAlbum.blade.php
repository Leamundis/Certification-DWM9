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
{{ Form::open(['url' => '/insertAlbum']) }}
    {{ Form::text('name', '', ['placeholder' => 'Nom', 'required' => 'true']) }}
    {{ Form::number('year', '', ['required' => 'true']) }}
    {{ Form::select('artist_id', $artistsArray)  }}
    {{ Form::select('genres[]', $genresArray, null, ['multiple' => 'multiple'])  }}
    {{ Form::number('price', '', ['required' => 'true']) }} 
    {{ Form::number('stock', '', ['required' => 'true']) }}
    {{ Form::submit('Ajouter cet Album') }}
{{ Form::close() }}
@stop