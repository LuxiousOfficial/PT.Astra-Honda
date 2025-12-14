<?php

namespace App\Models;

use App\Models\User;
use App\Models\Karir;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Position extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'office', 'salary', 'join',
                            'administration', 'exam', 'hr', 'users', 'hiring'];

    // protected $with = ['karir'];

    public function scopeFilter(Builder $query): void
    {
        $query->where('office', 'like', '%' . request('search') . '%');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // public function karir(): BelongsTo
    // {
    //     return $this->belongsTo(Karir::class);
    // }
}
