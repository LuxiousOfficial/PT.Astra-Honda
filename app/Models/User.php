<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
        'is_developer',
    ];

    public function scopeFilter(Builder $query, array $filters): void 
    {
        if($filters['search'] ?? false ) {

            $query->where('name', 'like', '%' . request('search') . '%')
            ->orWhere('email', 'like', '%' . request('search') . '%');
        }
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected $with = ['profile', 'education', 'experience', 'file', 'position', 'skill'];

    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    public function education(): HasOne
    {
        return $this->hasOne(Education::class);
    }

    public function experience(): HasOne
    {
        return $this->hasOne(Experience::class);
    }

    public function file(): HasOne
    {
        return $this->hasOne(File::class);
    }

    public function position(): HasOne
    {
        return $this->hasOne(Position::class);
    }

    public function skill(): HasOne
    {
        return $this->hasOne(Skill::class);
    }
}
