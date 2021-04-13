<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verified_user extends Model
{
    protected $table = 'verified_userlist';
    public $timestamps = false;
    protected $primaryKey = 'userid';
}
