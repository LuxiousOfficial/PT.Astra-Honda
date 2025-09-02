<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dealer extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama', 'alamat', 'telepon'];

    public function scopeFilter(Builder $query): void
    {
        $query->where('nama', 'like', '%' . request('search') . '%')->
        orWhere('alamat', 'like', '%' . request('search') . '%');
    }
}
