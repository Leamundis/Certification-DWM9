<?php

namespace App\Http\Controllers;

use App\Artist as Artist;
use App\Album as Album;
use App\Genre as Genre;
use App\Shirt as Shirt;
use Illuminate\Http\Request;

class ActionController extends Controller
{

    // All Shirt's actions
    public function insertShirt(Request $request)
    {
        $newShirt = Shirt::insertShirt($request);
        $request->session()->flash('success', 'Le T-shirt "' . $newShirt->name . '" à bien été ajouté à la liste.');
        return redirect('/shirt');
    }

    public function updateOneShirt(Request $request)
    {   
        $updateShirt = Shirt::updateOneShirt($request);
        return redirect('/shirt');
    }

    public function deleteOneShirt(Request $request)
    {   
        $deleteShirt = Shirt::deleteOneShirt($request);
        return redirect('/shirt');
    }

    public function plusOneShirt(Request $request)
    {   
        $updateShirt = Shirt::plusOneShirt($request);
        return redirect('/shirt');
    }

    public function minusOneShirt(Request $request)
    {   
        $updateShirt = Shirt::minusOneShirt($request);
        return redirect('/shirt');
    }


    // All Album's actions
    public function insertAlbum(Request $request)
    {
        $newAlbum = Album::insertAlbum($request);
        $request->session()->flash('success', 'Le nouvel Album "' . $newAlbum->name . '" à bien été ajouté à la liste.');
        return redirect('/album');
    }

    public function updateOneAlbum(Request $request)
    {   
        $updateAlbum = Album::updateOneAlbum($request);
        return redirect('/album');
    }

    public function deleteOneAlbum(Request $request)
    {   
        $deleteAlbum = Album::deleteOneAlbum($request);
        return redirect('/album');
    }

    public function plusOneAlbum(Request $request)
    {   
        $updateAlbum = Album::plusOneAlbum($request);
        return redirect('/album');
    }

    public function minusOneAlbum(Request $request)
    {   
        $updateAlbum = Album::minusOneAlbum($request);
        return redirect('/album');
    }

    // All Genre's actions
    public function insertGenre(Request $request)
    {
        $newGenre = Genre::insertGenre($request);
        $request->session()->flash('success', 'Le nouveau Genre "' . $newGenre->name . '" à bien été ajouté à la liste.');
        return redirect('/genre');
    }

    // All Artist's actions
    public function insertArtist(Request $request)
    {
        $newArtist = Artist::insertArtist($request);
        $request->session()->flash('success', 'Le nouvel Artiste "' . $newArtist->name . '" à bien été ajouté à la liste.');
        return redirect('/artist');
    }
}
