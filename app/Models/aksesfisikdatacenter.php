<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aksesfisikdatacenter extends Model
{
    use HasFactory;
    protected $guarded = ['id_akses_fisik_data_center'];
    public function prosesform(): HasMany
    {
        return $this->hasMany(Prosesform::class);
    }
    
}
