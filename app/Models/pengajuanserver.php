<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuanserver extends Model
{
    use HasFactory;
    protected $guarded = ['id_pengajuan_server'];
    public function prosesform(): HasMany
    {
        return $this->hasMany(Prosesform::class);
    }
    public function Layanan(): BelongsTo
    {
        return $this->belongsTo(Layanan::class);
    }
}
