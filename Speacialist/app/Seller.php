<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'seller';
    public $timestamps = true;
    protected $primaryKey = 'id';
}
