<?php

namespace App\Http\Controllers;

use App\Pokemons;
use Illuminate\Http\Request;

class PokemonsController extends Controller
{
    public function showAll()
    {
        return Pokemons::paginate(5);
    }

    public function searchBy(Request $request)
    {
        $query = Pokemons::query();
    
        if ($request->has('name')) {
            $query->where('name', 'LIKE', '%' . $request->name . '%');
        }
        if ($request->has('type')) {
            $query->where('type', 'LIKE', '%' . $request->type . '%');
        }
        if ($request->has('skill')) {
            $query->where('skills', 'LIKE', '%' . $request->skill . '%');
        }
    
        return $query->paginate();
    }
}
