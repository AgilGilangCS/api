<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lainnya extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_lainnya';
    protected $guarded = ['id_lainnya'];
}
