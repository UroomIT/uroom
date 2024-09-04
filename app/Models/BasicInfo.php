<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'Email', 'Phone'
    ];

    public function getPhotoURLAttribute(){
        return asset('uploads/images\\').$this->Photo;
    }
}
