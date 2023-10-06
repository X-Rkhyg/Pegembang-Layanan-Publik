<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vpsbaru extends Model
{
    use HasFactory;
    protected $guarded = ['id_vps_baru'];
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

