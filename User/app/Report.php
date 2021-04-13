<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'report';
    public $timestamps = false;
    protected $primaryKey = 'id';
}
