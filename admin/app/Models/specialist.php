<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specialist extends Model
{
    protected $table = 'specialist';
    public $timestamps = false;
    protected $primaryKey = 'userid';
}
