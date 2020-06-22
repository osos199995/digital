<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
'description1',
'description2',
'image',
'date',
'forward',
'category'
    ];

}
