<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'review';
    public $timestamps = false;
    protected $primaryKey = 'id';
}
