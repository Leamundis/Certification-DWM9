<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public static function getGenres()
    {
        return Genre::all();
    }

    public static function insertGenre($request)
    {
        $genre = new Genre();
        $genre->name = $request->name;
        $genre->save();        
        return $genre;
    }

    public static function getGenresArray()
    {
        $genres = Genre::all();
        $genresArray= [];
        foreach($genres as $genres) {
            $genresArray[$genres->id] = $genres->name;
        }
        return $genresArray;
    }

    public function album()
    {
        return $this->belongsToMany('App\Album');        
    }
}
