<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verified_specialist extends Model
{
    protected $table = 'verified_specialist';
    public $timestamps = false;
    protected $primaryKey = 'userid';
}
