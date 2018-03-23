<?php

namespace App\Http\Controllers;

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
        return view('/album');
    }

    public function shirt()
    {
        return view('/shirt', ['shirts' => Shirt::getShirts()]);
    }

    public function instrument()
    {
        return view('/instrument');
    }

    public function insertShirt()
    {
        return view('/insertShirt');
    }

    public function updateShirt(Request $request)
    {
        return view('/updateShirt', ['shirt' => Shirt::getOneShirt($request)]);
    }

}
