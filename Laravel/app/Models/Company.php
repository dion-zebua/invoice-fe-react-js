<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'name',
        'logo',
        'address',
        'telephone',
        'email',
        'logo',
        'payment_methode',
        'payment_name',
        'payment_number',
    ];
}
