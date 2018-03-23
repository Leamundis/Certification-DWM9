<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shirt extends Model
{

    public static function getShirts()
    {
        $shirts = Shirt::All();
        return $shirts;
    }

    public static function getOneShirt($request)
    {
        return Shirt::findOrFail($request->id);

    }

    public static function insertShirt($request)
    {
        $shirt = New Shirt();
        $shirt->name = $request->name;
        $shirt->description = $request->description;
        $shirt->size = $request->size;
        $shirt->stock = $request->stock;
        $shirt->price = $request->price;        
        $shirt->save();
        return $shirt;
    }

    public static function updateOneShirt($request)
    {
        $shirt = Shirt::findOrFail($request->id);
        $shirt->name = $request->name;
        $shirt->description = $request->description;
        $shirt->size = $request->size;
        $shirt->stock = $request->stock;
        $shirt->price = $request->price;        
        $shirt->save();
        return $shirt;
    }

    public static function deleteOneShirt($request)
    {
        $shirt = Shirt::findOrFail($request->id);
        $shirt->delete();
        return true;
    }

    public static function plusOneShirt($request)
    {
        $shirt = Shirt::findOrFail($request->id);
        $shirt->stock += 1;      
        $shirt->save();
        return $shirt;
    }

    public static function minusOneShirt($request)
    {
        $shirt = Shirt::findOrFail($request->id);
        $shirt->stock -= 1;        
        $shirt->save();
        return $shirt;
    }
}
