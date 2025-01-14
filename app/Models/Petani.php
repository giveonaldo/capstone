<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petani extends Model
{
    /** @use HasFactory<\Database\Factories\PetaniFactory> */
    use HasFactory;

    protected $fillable = [
        'nomor_telpon',
        'alamat',
        'deskripsi',
        'jenis_usaha',
        'luas_lahan',
        'akun_bank'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
