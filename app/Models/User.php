<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\File;
use App\Models\Skill;
use App\Models\Profile;
use App\Models\Position;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

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

    // public function scopeFilter(Builder $query, array $filters): void 
    // {
    //    $query->when(
    //     $filters['search'] ?? false,
    //     fn($query, $search) =>
    //     $query->where('name', 'like', '%' . $search . '%')
    //     ->orWhere('email', 'like', '%' . $search . '%')
    //    );

    //    $query->when(
    //     $filters['position'] ?? false,
    //     fn($query, $position) =>
    //     $query->whereHas('position', fn($query) => $query->where('karir_id',
    //     $position))
    //    );

       
    // }

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
