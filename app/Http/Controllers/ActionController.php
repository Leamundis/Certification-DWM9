<?php

namespace App\Http\Controllers;

use App\Shirt as Shirt;
use Illuminate\Http\Request;

class ActionController extends Controller
{
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
}
