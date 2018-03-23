<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    public static function getArtists()
    {
        return Artist::all();
    }

    public static function insertArtist($request)
    {
        $artist = New Artist();
        $artist->name = $request->name;
        $artist->save();        
        return $artist;
    }

    public static function getArtistsArray()
    {
        $artists = Artist::all();
        $artistsArray= [];
        foreach($artists as $artist) {
            $artistsArray[$artist->id] = $artist->name;
        }
        return $artistsArray;
    }
}
