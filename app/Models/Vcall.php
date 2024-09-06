<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vcall extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'gender',
        'email',
        'datecall',
        'datemove',
        'room_id', 
        'is_validated'
        
    ];

    public function room()
    {
        return $this->belongsTo(Rooms::class);
    }
}
