<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikatelmulti extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function prosesform(): HasMany
    {
        return $this->hasMany(Prosesform::class);
    }
    public function Layanan(): BelongsTo
    {
        return $this->belongsTo(Layanan::class);
    }
     public $timestamps = false;

}
