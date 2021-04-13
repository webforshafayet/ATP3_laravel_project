<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentpost extends Model
{
    protected $table = 'commentpost';
    public $timestamps = false;
    protected $primaryKey = 'id';
}
