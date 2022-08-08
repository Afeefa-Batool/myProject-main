<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'cardholder_first_name',
        'cardholder_last_name',
        'cardholder_address',
        'cardholder_city',
        'cardholder_state',
        'cardholder_zip',
        'cardholder_last_4',
        'customer_id',
        'product_id',
    ];
}
