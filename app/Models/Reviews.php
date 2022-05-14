<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $fillable = ['client_id', 'status', 'title', 'review', 'rating', 'product_id', 'link_to_photo'];
}
