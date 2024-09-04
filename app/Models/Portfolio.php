<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_id',
        'Photo1',
        'title1',
        'Photo2',
        'title2',
        'Photo3',
        'title3',
        'Photo4',
        'title4',
        'Photo5',
        'title5',
        'Photo6',
        'title6',
        'Photo7',
        'title7',
        'Photo8',
        'title8',
        'Photo9',
        'title9',
        'Photo10',
        'title10',
    ];
    
    public function getPhoto1URLAttribute(){
        
        return asset('uploads/images\\').$this->Photo1;
    }
    public function getPhoto2URLAttribute(){
        
        return asset('uploads/images\\').$this->Photo2;
    }
    public function getPhoto3URLAttribute(){
        
        return asset('uploads/images\\').$this->Photo3;
    }
    public function getPhoto4URLAttribute(){
        
        return asset('uploads/images\\').$this->Photo4;
    }
    public function getPhoto5URLAttribute(){
        
        return asset('uploads/images\\').$this->Photo5;
    }
    public function getPhoto6URLAttribute(){
        
        return asset('uploads/images\\').$this->Photo6;
    }
    public function getPhoto7URLAttribute(){
        
        return asset('uploads/images\\').$this->Photo7;
    }
    public function getPhoto8URLAttribute(){
        
        return asset('uploads/images\\').$this->Photo8;
    }
    public function getPhoto9URLAttribute(){
        
        return asset('uploads/images\\').$this->Photo9;
    }
    public function getPhoto10URLAttribute(){
        
        return asset('uploads/images\\').$this->Photo10;
    }
    public function room(){
        return $this->hasOne(Rooms::class);
    }
}
