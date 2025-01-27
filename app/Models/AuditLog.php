<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'email',
        'action',
        'route',
        'data',
    ];

    protected $casts = [
        'data' => 'array', // Para manejar el campo 'data' como un array
    ];
}
