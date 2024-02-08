<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendente extends Model
{
    use HasFactory;

    protected $fillable = [
        'atendente',
        'numero_atendente',
    ];

    protected $table = 'atendentes';
}
