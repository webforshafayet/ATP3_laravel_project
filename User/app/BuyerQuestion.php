<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyerQuestion extends Model
{
    protected $table = 'buyerquestion';
    public $timestamps = false;
    protected $primaryKey = 'id';
}
