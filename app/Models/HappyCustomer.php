<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HappyCustomer extends Model
{
    use HasFactory;

    protected $table = 'happy_customers';

    protected $fillable = [
        'url',
        'titre',
        'icone',
        'description'
    ];
}
