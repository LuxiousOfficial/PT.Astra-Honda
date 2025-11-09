<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Skill extends Model
{
    protected $fillable = ['user_id', 'first_skill', 'first_rate', 'second_skill', 'second_rate', 
    'third_skill', 'third_rate', 'fourth_skill', 'fourth_rate', 'fifth_skill', 'fifth_rate'];

    // protected $with = ['user'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
