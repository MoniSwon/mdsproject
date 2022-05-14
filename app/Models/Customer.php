<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['last_name', 'first_name', 'email', 'password', 'group_id', 'phone', 'gender', 'status', 'address_id', 'invoice_address_id'];
}
