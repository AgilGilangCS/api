<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lemari extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_lemari';
    protected $guarded = ['id_lemari'];
}
