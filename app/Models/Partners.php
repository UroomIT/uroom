<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slogan',
        'logo',
        
    ];

    public function getLogoURLAttribute(){
        return asset('uploads/images\\').$this->logo;
    }
}
