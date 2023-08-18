<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whats extends Model
{
    use HasFactory;

    protected $fillable = ['webhook','type'];

    protected $table = 'webhooks';
}
