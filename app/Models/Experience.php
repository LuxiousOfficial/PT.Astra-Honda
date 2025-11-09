<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Experience extends Model
{
    protected $fillable = ['user_id', 'company', 'position', 'entry_year', 'year_stopped',
    'salary', 'industry', 'facility', 'reason_to_stop'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
