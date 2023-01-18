<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Remittance extends Model
{
    use HasFactory;

    protected $fillable = [
        'commodity_id',
        'amount',
        'freight_number',
        'driver_name',
        'driver_mobile',
        'description',
        'freight_pic',
        'type',
        'date',
    ];

    /**
     * @return BelongsTo
     */
    public function commodity(): BelongsTo
    {
        return $this->belongsTo(Commodity::class);
    }
}
