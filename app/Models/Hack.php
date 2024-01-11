<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hack extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_grup',
        'password',
        'nama_ketua',
        'email',
        'nomor_whatsapp',
        'id_line',
        'id_github',
        'tanggal_lahir_ketua',
        'cv',
        'flazz_binus',
        'id_kartu_non_binus'
    ];

}
