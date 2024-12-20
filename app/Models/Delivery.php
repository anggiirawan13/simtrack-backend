<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    /** @use HasFactory<\Database\Factories\DeliveryFactory> */
    use HasFactory;

    protected $fillable = [
        'delivery_number',
        'company_name',
        'shipper_id',
        'status_id',
        'delivery_date',
        'receive_date',
        'confirmation_code'
    ];
}
