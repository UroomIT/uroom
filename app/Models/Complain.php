<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'Title',
        'Category',
        'Description',
        'IsResolved',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function isAdmin(){
        return $this->roles()->where('name', 'Administrator')->exists();
    }

}
