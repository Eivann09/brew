<?php

namespace App\Http\Controllers;
use App\Models\beverages_model;
use Illuminate\Http\Request;


class beverages_Controller extends Controller
{
    public function index()
    {
        $milkea = beverages_model::all();

        return response()->json([
            'status' => 200,
            'Miktea' => $milkea,
        ]);
    }

    public function insert(Request $request){
        
      
        //validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'size' => 'required|in:medio, grande',
            'Pearls' => 'required|in:withPearls, noPearls ',
            'price' => 'required|numeric',
        ]);

        //insertion query
        $milktea_insert = beverages_model::create($validated);

        $milktea_insert->save();

        //json response
        return response()->json(['message' => 'Milktea created successfully'], 200);
       

    }
}
