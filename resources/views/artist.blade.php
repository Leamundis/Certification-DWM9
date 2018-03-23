@extends('layouts.base')
@section('title', 'Artiste')
@section('nav')
<nav class="nav2">
    <ul>
            <li><a href="/genre">Genres</a></li>
            <li><a href="/artist">Artistes</a></li>
    </ul>
</nav>
@stop

@section('content')
<h1>Artistes existants</h1>
<div class="core">
    <table>
        <tr>
            <th>Artistes</th>
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
</div>
@stop