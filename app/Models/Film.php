<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    public $timestamps = false;
    protected $table = 'films';
    protected $fillable = ['title','genre','director','release_year','rating'];
}