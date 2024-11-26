<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'favicon',
        'phone_one',
        'phone_two',
        'email_one',
        'email_two',
        'address',
        'operational_address',
        'footer_text',
    ];
}
