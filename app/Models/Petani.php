<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petani extends Model
{
    /** @use HasFactory<\Database\Factories\PetaniFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nomor_telpon',
        'alamat',
        'deskripsi',
        'jenis_usaha',
        'luas_lahan',
        'label'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
