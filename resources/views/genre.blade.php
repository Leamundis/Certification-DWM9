@extends('layouts.base')
@section('title', 'Genre')
@section('nav')
<nav class="nav2">
    <ul>
            <li><a href="/genre">Genres</a></li>
            <li><a href="/artist">Artistes</a></li>
    </ul>
</nav>
@stop

@section('content')
<h1>Genres existants</h1>
<div class="core">
    <table>
        <tr>
            <th>Genres</th>
        </tr>
        @foreach ($genres as $genre)
            <tr>
                <td> {{ $genre['name'] }} </td>
            </tr>
        @endforeach
        <tr>
            <td>
                {{ Form::open(['url' => '/insertGenre']) }}
                    {{ Form::text('name', '', ['placeholder' => 'Nouveau genre', 'required' => 'true']) }}
                {{ Form::submit('Ok') }}
                {{ Form::close() }}
            </td>
        </tr>
    </table>
</div>
@stop