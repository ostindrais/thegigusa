<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $attributes = [
        'contactType' => 'fan',
        'vip' => 0,
        'emailIsVerified' => 0
    ];
}
