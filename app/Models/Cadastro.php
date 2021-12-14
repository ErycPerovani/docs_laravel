<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{

    //identifica com quais areas eu irei trabalhar.

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'city'
    ];
}
