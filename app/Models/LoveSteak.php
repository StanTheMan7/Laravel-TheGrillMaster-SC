<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoveSteak extends Model
{
    use HasFactory;

    protected $table = 'love_steaks';

    protected $fillable = [
        'titre',
        'descirption',
        'bouton'
    ];
}
