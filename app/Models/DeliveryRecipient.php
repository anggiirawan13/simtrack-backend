<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryRecipient extends Model
{
    /** @use HasFactory<\Database\Factories\DeliveryRecipientFactory> */
    use HasFactory;

    protected $fillable = [
        'delivery_number',
        'name',
        'address_id'    
    ];
}
