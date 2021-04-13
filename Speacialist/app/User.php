<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'customers';
    public $timestamps = false;
    protected $primaryKey = 'id';
}
