<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'cv','position',
    ];
}
