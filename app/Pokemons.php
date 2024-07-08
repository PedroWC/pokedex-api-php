<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pokemons extends Model
{
    protected $fillable = ['id', 'img', 'name', 'type', 'skills', 'height', 'weight'];
}
