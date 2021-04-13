<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sellerlist extends Model
{
    protected $table = 'sellerlist';
    public $timestamps = false;
    protected $primaryKey = 'userid';
}
