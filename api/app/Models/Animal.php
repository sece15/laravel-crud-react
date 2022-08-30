<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Animal extends Eloquent
{
    protected $connection = 'mongoproject';
    protected $collection = 'animals';
    
    protected $fillable = [
        'species', 'color','leg'
    ];
}
