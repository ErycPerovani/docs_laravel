<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    protected $fillable = [
        'name',
        'email',
        'telefone',
        'password',
    ];
}
