<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prosesform extends Model
{
    use HasFactory;
    protected $guarded = ['id_proses_formulir'];
    /**
     * Get the user that owns the Prosesform
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function vpsperubahan(): BelongsTo
    {
        return $this->belongsTo(Vpsperubahan::class);
    }
    public function vpsbaru(): BelongsTo
    {
        return $this->belongsTo(Vpsbaru::class);
    }
    public function aksesfisikdatacenter(): BelongsTo
    {
        return $this->belongsTo(Aksesfisikdatacenter::class);
    }
    public function pengajuanserver(): BelongsTo
    {
        return $this->belongsTo(Pengajuanserver::class);
    }
    public function colocationserver(): BelongsTo
    {
        return $this->belongsTo(Colocationserver::class);
    }
    public function sertifikatelmulti(): BelongsTo
    {
        return $this->belongsTo(Sertifikatelmulti::class);
    }
    public function sertifikatelsingle(): BelongsTo
    {
        return $this->belongsTo(Sertifikatelmulti::class);
    }
}
