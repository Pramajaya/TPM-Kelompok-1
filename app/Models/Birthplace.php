<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Birthplace extends Model
{
    use HasFactory;

    protected $table = 'birthplaces';

    protected $fillable = [
        'birthplace_name'
    ];

    public function hacks(){
        return $this->hasMany(Hack::class);
    }
}
