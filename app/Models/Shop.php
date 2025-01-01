<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    // Specify which attributes can be mass-assigned.
    protected $fillable = ['name', 'brand', 'price','image'];
}
