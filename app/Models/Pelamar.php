<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pelamar extends Model
{
    use HasFactory;
    protected $fillable = ['jabatan_id', 'email', 'nik', 'namalengkap', 'tanggallahir',
     'tempatlahir', 'jeniskelamin', 'alamat', 'agama', 'nohp', 'pasphoto', 'cv', 'ijazah', 
     'transkripnilai', 'ktp', 'kk', 'skck'];

     public function scopeFilter(Builder $query, array $filters): void 
     {
         if($filters['search'] ?? false ) {
 
             $query->where('namalengkap', 'like', '%' . request('search') . '%')
             ->orWhere('jabatan', 'like', '%' . request('search') . '%');
         }
     }

     protected $with = ['jabatan'];

     public function jabatan(): BelongsTo
     {
        return $this->belongsTo(Karir::class);
     }
}
