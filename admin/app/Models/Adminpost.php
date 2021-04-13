<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adminpost extends Model
{
    protected $table = 'adminpost';
    public $timestamps = false;
    protected $primaryKey = 'userid';
}
