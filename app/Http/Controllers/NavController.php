<?php

namespace App\Http\Controllers;

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
        return view('/shirt');
    }

    public function instrument()
    {
        return view('/instrument');
    }
}
