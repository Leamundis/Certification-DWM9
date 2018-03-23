@extends('layouts.base')
@section('title', 'Artiste')
@section('content')
<nav>
    <ul>
            <li><a href="/genre">Genres</a></li>
            <li><a href="/artist">Artistes</a></li>
    </ul>
</nav>
<h1>Artistes existants</h1>

<table>
    <tr>
        <th>Genres</th>
    </tr>
    @foreach ($artists as $artist)
        <tr>
            <td> {{ $artist['name'] }} </td>
        </tr>
    @endforeach
    <tr>
        <td>
            {{ Form::open(['url' => '/insertArtist']) }}
                {{ Form::text('name', '', ['placeholder' => 'Nouvel Artiste', 'required' => 'true']) }}
            {{ Form::submit('Ok') }}
            {{ Form::close() }}
        </td>
    </tr>
</table>
@stop