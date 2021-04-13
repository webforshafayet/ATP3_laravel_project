<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class useradmin_msg extends Model
{
    use HasFactory;
    protected $table = 'usermassage';
    public $timestamps = false;
    protected $primaryKey = 'userid';




}
