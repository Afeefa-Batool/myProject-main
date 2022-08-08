<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sale_items extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'code_number',
        'product_id',
        'sale_id',
        'customer_id',
        'quantity',
        'price',
        'base_price',
        'total_amount',
        'validated_at',
        'date_added',


    ];
}
