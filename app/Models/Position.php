<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Position extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'karir_id', 'salary', 'join'];

    protected $with = ['karir'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function karir(): BelongsTo
    {
        return $this->belongsTo(Karir::class);
    }
}
