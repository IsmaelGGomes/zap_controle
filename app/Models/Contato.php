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
        'filial',
        'email',
        'transportadora',
        'numero',
        'status',
        'edit',
    ];

    protected $table = 'contatos';
}
