<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'driver_id', 
        'fuel_type',
        'fuel_amount',
        'delivery_address',
        'total_amount',
        'status'
    ];

    // Temporary relationships to avoid errors
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function payment()
    {
        // Return a dummy relationship for now
        return $this->hasOne(Payment::class);
    }
}
