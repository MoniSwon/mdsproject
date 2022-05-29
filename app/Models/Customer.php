<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['last_name', 'first_name', 'email', 'password', 'roles_id', 'phone', 'gender', 'status', 'address_id', 'inactive_date', 'inactive_reason', 'birthdate'];

    public function roles()
    {
        return $this->belongsTo(Roles::class);
    }
}
