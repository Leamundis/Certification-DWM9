<?php

namespace App\Http\Controllers;

use App\Artist as Artist;
use App\Album as Album;
use App\Genre as Genre;
use App\Shirt as Shirt;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public function home()
    {
        return view('/home');
    }

    public function album()
    {
        return view('/album', ['albums' => Album::getAlbums()]);
    }

    public function shirt()
    {
        return view('/shirt', ['shirts' => Shirt::getShirts()]);
    }

    public function artist()
    {
        return view('/artist', ['artists' => Artist::getArtists()]);
    }

    public function insertAlbum()
    {
        return view('/insertAlbum', ['artistsArray' => Artist::getArtistsArray(), 'genresArray' => Genre::getGenresArray()]);
    }

    public function insertShirt()
    {
        return view('/insertShirt');
    }

    public function updateShirt(Request $request)
    {
        return view('/updateShirt', ['shirt' => Shirt::getOneShirt($request)]);
    }

    public function updateAlbum(Request $request)
    {
        return view('/updateAlbum', ['album' => Album::getOneAlbum($request), 'artistsArray' => Artist::getArtistsArray(), 'genresArray' => Genre::getGenresArray()]);
    }

    public function genre()
    {
        return view('/genre', ['genres' => Genre::getGenres()]);
    }

}
