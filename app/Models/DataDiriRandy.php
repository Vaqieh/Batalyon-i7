<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class DataDiriNayla extends Model
{
    use HasFactory;
    protected $table = 'students';

    
    protected $fillable = [
        'nama', 'nim', 'prodi', 'alamat', 'email', 'nomor_telepon', 'nama_kelompok', 'foto'
    ];
}