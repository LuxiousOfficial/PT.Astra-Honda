<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'email', 'nohp', 'alamat', 'provinsi', 'kota',
    'varianmotor', 'tahunpembuatan', 'jenisservice', 'jadwal', 'jam'];

     public function scopeFilter(Builder $query, array $filters): void 
     {
         if($filters['search'] ?? false ) {
 
             $query->where('nama', 'like', '%' . request('search') . '%')
             ->orWhere('provinsi', 'like', '%' . request('search') . '%');
         }
     }
}
