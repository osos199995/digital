<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    protected $fillable = [
        'image', 'title', 'description',
    ];

    public function Jobs()
    {
        return $this->hasMany('App\jobs' );

    }

}
