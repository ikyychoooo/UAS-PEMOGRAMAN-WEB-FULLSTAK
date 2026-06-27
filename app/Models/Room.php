<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    // Mengizinkan semua field/kolom di database untuk diisi secara massal
    protected $guarded = []; 

    // ATAU jika Anda lebih suka mendaftarkan kolom secara manual, gunakan fillable:
    // protected $fillable = ['name', 'code', 'category_id', 'building', 'floor', 'capacity', 'description', 'image', 'is_active', 'open_time', 'close_time'];
}