<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carroussel extends Model
{
    use HasFactory;

    protected $table = 'carroussels';

    protected $fillable = [
        'url'
    ];
}
