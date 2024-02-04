<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hack extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_ketua',
        'email',
        'nomor_whatsapp',
        'id_line',
        'id_github',
        'birthplace_id',
        'tanggal_lahir_ketua',
        'cv',
        'id_card',
        'user_id'
    ];

    public function birthplaces(){
        return $this->belongsTo(Birthplace::class, 'birthplace_id');
    }

    public function users(): BelongsTo{
        return $this->belongsTo(User::class);
    }

}
