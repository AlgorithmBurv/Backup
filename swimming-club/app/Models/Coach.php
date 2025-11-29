<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;

    // Nama tabel (opsional, kalau sama dengan plural dari nama model biasanya otomatis)
    protected $table = 'coaches';

    // Kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'name',
        'photo',
        'specialization',
        'bio',
        'certification',
    ];
}
