<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Release extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'image', 'title', 'slug', 'information'];

    public function scopeFilter(Builder $query, array $filters): void 
    {
        if($filters['search'] ?? false ) {

            $query->where('title', 'like', '%' . request('search') . '%');
        }
    }
}
