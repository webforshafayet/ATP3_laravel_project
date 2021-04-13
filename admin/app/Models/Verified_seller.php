<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verified_seller extends Model
{
    protected $table = 'verified_sellerlist';
    public $timestamps = false;
    protected $primaryKey = 'userid';
}
