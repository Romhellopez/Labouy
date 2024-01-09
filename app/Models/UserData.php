<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\HotelController;
use App\Models\Hotel;

class UserData extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'usertype',
        'email',
    ];

    public function Hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

}
