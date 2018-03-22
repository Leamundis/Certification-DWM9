@extends('layouts.base')
@section('content')
<div>
    <input type="button" src="" value="Ajouter un noubelle Album">
</div>
<table>
    <tr>
        <th>Nom</th>
        <th>Description</th>
        <th>Taille</th>
        <th>Stock</th>
        <th>Mettre à jour</th>
        <th>Supprimer</th>
        <th>Modification du stock</th>
    </tr>
    @foreach ($shirts as $shirt)
        <tr>
            <td> {{ $shirt['name'] }} </td>
            <td> {{ $shirt['description'] }} </td>

        </tr>
    @endforeach
</table>


@stop