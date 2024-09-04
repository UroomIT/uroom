<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'password',
        'Photo',
        'State',
        'phone',
        'role_id',
        'room_id'
    ];

    public function getPhotoURLAttribute(){
        return asset('uploads/images\\').$this->Photo;
    }
    public function isAdmin(){
        return $this->roles()->where('name', 'Administrator')->exists();
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function complain(){
        return $this->belongsTo(Complain::class);
    }
    public function room(){
        return $this->belongsTo(Rooms::class);
    }
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
