<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public static function getAlbums()
    {
        $albums = Album::All();
        return $albums;
    }

    public static function getOneAlbum($request)
    {
        return Album::findOrFail($request->id);
    }

    public static function insertAlbum($request)
    {
        $album = New Album();
        $album->name = $request->name;
        $album->year = $request->year;
        $album->artist_id = $request->artist_id;
        $album->stock = $request->stock;
        $album->price = $request->price;        
        $album->save();
        foreach($request->genres as $genre) {
            $album->genres()->attach($genre);
        }
        return $album;
    }

    public static function updateOneAlbum($request)
    {
        $album = Album::findOrFail($request->id);
        $album->name = $request->name;
        $album->year = $request->year;
        $album->stock = $request->stock;
        $album->price = $request->price;        

        $album->artist_id = $request->artist_id;
        $album->genres()->detach();
        $album->save();
        foreach ($request->genres as $genre) {
            $album->genres()->attach($genre);
        }
        return $album;
    }

    public static function deleteOneAlbum($request)
    {
        $album = Album::findOrFail($request->id);
        $album->genres()->detach();
        $album->delete();
        return true;
    }

    public static function plusOneAlbum($request)
    {
        $album = Album::findOrFail($request->id);
        $album->stock += 1;      
        $album->save();
        return $album;
    }

    public static function minusOneAlbum($request)
    {
        $album = Album::findOrFail($request->id);
        $album->stock -= 1;        
        $album->save();
        return $album;
    }

    public function genres()
    {
        return $this->belongsToMany('App\Genre');
    }

    public function artist()
    {
        return $this->belongsTo('App\Artist');
    }

}
