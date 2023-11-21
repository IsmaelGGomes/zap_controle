<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    protected $fillable = [
        'add_remove',
        'nome',
        'email',
        'transportadora',
        'numero',
        'status',
        'edit',
        'estado',
        'cidade',
        'filial'
    ];

    protected $table = 'contatos';
}
