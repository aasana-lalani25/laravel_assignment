<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
Use HasFactory;


class hotel extends Model
{
    protected $fillable=[
        'name',
        'checkindate',
        'checkoutsate',
        'roomtype'
    ];
}
