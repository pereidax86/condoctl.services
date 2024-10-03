<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    // Permite la asignación masiva de estos campos
    protected $fillable = ['description', 'amount', 'date', 'user_id'];

    // Relación con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
