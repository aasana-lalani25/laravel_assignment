<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class PropertyListing extends Model
{
   protected $fillable=[
    'address',
    'type',
    'price',
    'des'
   ];
}
