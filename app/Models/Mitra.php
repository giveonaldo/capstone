<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $fillable = [
        'name',
        'deskripsi',
        'valuasi',
        'status',
        'mitra',
        'image'
    ];

    public function user()
    {
        return $this->belongsToMany(User::class, 'user_mitra');
    }
}
