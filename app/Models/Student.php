<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'phone',
        'State',
        'university_id',
        'address',
        'room_id',
        'is_validated'
        
    ];

    public function room()
    {
        return $this->belongsTo(Rooms::class);
    }
    public function university()
    {
        return $this->belongsTo(University::class);
    }
}
