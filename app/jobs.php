<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    protected $fillable = [
        'careers_id', 'title',
        'quote',
        'job_requirements',
        'job_reponsabilities',
    ];
}
