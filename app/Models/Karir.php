<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Karir extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'slug', 'jabatan', 'jeniskelamin', 'pendidikan', 'pengalaman', 'keahlian', 'kerjasama', 'vaksin', 'lokasi', 'link'];

    public function scopeFilter(Builder $query): void
    {
        $query->where('jabatan', 'like', '%' . request('search') . '%');
    }

    public function pelamars(): HasMany
    {
        return $this->hasMany(Pelamar::class, 'jabatan_id');
    }

    public function position(): HasMany
    {
        return $this->hasMany(Position::class);
    }

    public function index()
    {
        $careers = Karir::count();
        return view('/dashboardhrdastrahonda.index');
    }
}
