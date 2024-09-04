<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'fonction',
        'email',
        'phone',
        'photo',
        
    ];

    public function getPhotoURLAttribute(){
        return asset('uploads/images\\').$this->photo;
    }
}
