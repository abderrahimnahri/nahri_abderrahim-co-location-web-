<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    //
    protected $fillable = [
        'adresse','description', 'superficie','prix','capacite','telephone','lat','lng','image'
    ];


    
}
