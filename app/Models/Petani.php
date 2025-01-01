<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petani extends Model
{
    /** @use HasFactory<\Database\Factories\PetaniFactory> */
    use HasFactory;

    protected $fillable = [
        'nama', 'email', 'nomor_telpon',
        'alamat', 'deskripsi', 'foto', 'jenis_usaha',
        'luas_lahan', 'akun_bank'
    ];
}
