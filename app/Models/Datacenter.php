<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datacenter extends Model
{
    use HasFactory;
    public function Layanan(): BelongsTo
    {
        return $this->belongsTo(Layanan::class);
    }
    /**
     * Get all of the comments for the Datacenter
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Vps(): HasMany
    {
        return $this->hasMany(Vps::class);
    }
    public function Server(): HasMany
    {
        return $this->hasMany(Server::class);
    }
}
