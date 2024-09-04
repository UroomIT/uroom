<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'Photo',
    ];
    
    public function getPhotoURLAttribute(){
        
        return asset('uploads/images\\').$this->Photo;
    }
    
}
