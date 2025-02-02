<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeRoom extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name',
    ];
    
    public function room()
    {
        return $this->hasOne(Rooms::class);
    }
}
