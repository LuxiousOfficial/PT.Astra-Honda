<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'name', 'email', 'nik', 'gender', 'place_of_birth', 
    'date_of_birth', 'address', 'phone_number', 'religion', 'status'];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
