<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Navbar extends Model
{
    use HasFactory;

    protected $table = 'navbars';

    protected $fillable = [
        'contenu'
    ];
}
