<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    /**
     * Get all of the comments for the Layanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Vpsperubahan(): HasMany
    {
        return $this->hasMany(Vpsperubahan::class);
    }
    public function Vpsbaru(): HasMany
    {
        return $this->hasMany(Vpsbaru::class);
    }
    public function Pengajuanserver(): HasMany
    {
        return $this->hasMany(Pengajuanserver::class,);
    }
    public function Colocationserver(): HasMany
    {
        return $this->hasMany(Colocationserver::class,);
    }
    public function Sertifikatelmulti(): HasMany
    {
        return $this->hasMany(Sertifikatelmulti::class,);
    }
    public function Sertifikatelsingle(): HasMany
    {
        return $this->hasMany(Sertifikatelsingle::class,);
    }
    public function Data_center(): HasMany
    {
        return $this->hasMany(Data_center::class);
    }

    /**
     
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Layanan(): BelongsTo
    {
        return $this->belongsTo(Layanan::class);
    }
}
