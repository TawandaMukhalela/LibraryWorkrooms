<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'time_slot', 'user', 'user_id', 'date', 'room_no'
    ];
}
