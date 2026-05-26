<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaundryItem extends Model
{
    use HasFactory;

    protected $table = 'laundry_items';

    protected $fillable = [
        'customer_name',
        'clothes_type',
        'detergent_type',
        'wash_type',
        'drying_method'
    ];
}