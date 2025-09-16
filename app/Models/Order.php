<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    protected $fillable=[
        'product_id',
        'customer_name',
        'company_name',
        'phone_number',
        'email',
        'quantity',
        'preferred_delivery_date',
        'street_address',
        'city',
        'country',
        'status',
        'uom'

    ];

    public function product():BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function getAmountAttribute(): float
    {
        return $this->product?->price * $this->quantity;
    }
}
