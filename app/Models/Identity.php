<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identity extends Model
{
    use HasFactory;

    protected $table = 'identity';

    protected $fillable = [
        'identity_name'
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
}
