<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;
    protected $fillable = [
        'RoomNumber',
        'Title',
        'gender',
        'type_room_id',
        'university_id',
        'logo_university',
        'Address',
        'Price',
        'Photo',
        'Description', 
        'Rate',
        'IsAvailable',
        'IsOnline',
        'univ_around_available'
    ];

    public function type_room()
    {
        return $this->belongsTo(TypeRoom::class);
    }
    public function university()
    {
        return $this->belongsTo(University::class);
    }
    public function getPhotoURLAttribute(){
        return asset('uploads/images\\').$this->Photo;
    }
    public function getLogoURLAttribute(){
        return asset('uploads/images\\').$this->logo_university;
    }
    

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
