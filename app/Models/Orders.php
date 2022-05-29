<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillabe = ['status', 'total', 'customer_id', 'expedition_date', 'address_id'];

    public function products()
    {
        return $this->belongsToMany(Products::class);
    }
}
