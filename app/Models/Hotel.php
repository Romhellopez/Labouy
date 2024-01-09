<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserData;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'Hotel',
        'Rooms',
        'Price',
        'Availability',
        'Reservation', 
        'Payment',
    ];
    public function UserData()
    {
        return $this->hasMany(UserData::class, 'id', 'name');
    }
     
}
