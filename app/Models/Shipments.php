<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipments extends Model
{
    use HasFactory;
    protected $fillable = ['expedition_date', 'order_id', 'status', 'address_id'];
}
