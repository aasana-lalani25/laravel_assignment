<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;
class courses extends Model
{
    protected $fillable=[
        'title',
        'des',
        'inst',
        'duration'
    ];
}
