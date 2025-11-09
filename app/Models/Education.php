<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Education extends Model
{
    protected $fillable = ['user_id', 'university', 'faculty', 'institution', 'major',
                            'entry_year', 'graduate', 'ipk'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
