<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Product extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'products';
    protected $dates = ['created_at', 'updated_at'];

    protected $fileable = ['description', 'price', 'stock'];
}
