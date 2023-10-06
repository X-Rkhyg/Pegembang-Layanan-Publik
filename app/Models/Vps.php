<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vps extends Model
{
    
    use HasFactory;
     /**
     * Get the user that owns the Vps
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Data_center(): BelongsTo
    {
        return $this->belongsTo(Data_center::class);
    }
}
