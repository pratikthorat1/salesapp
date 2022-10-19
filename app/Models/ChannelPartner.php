<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChannelPartner extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'location',
        'agency_name',
        'mobile'
    ];
}
