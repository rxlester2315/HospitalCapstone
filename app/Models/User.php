<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

use Lab404\Impersonate\Models\Impersonate;


class User extends Authenticatable
{
    use HasFactory, Notifiable,SoftDeletes,Impersonate;

    
       protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
       'name',
        'avatar',
        'email',
        'role_name',
        'password',
        'status',
    ];

     public function hasRole($role)
    {
        return $this->role_name === $role; // Adjust this based on your actual column name for role
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

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getMessageCount(){
        if(auth()->check()){
           $count = ChMessage::where('to_id',auth()->id())->where('seen','0')->count();
           return $count;
        }
        
        
        return 0;
    }


 public function activityLogs()
    {
        return $this->hasMany(UserActivityLog::class, 'editor_id');
    }

    // User.php (Model)
public function patientInfo()
{
    return $this->hasOne(PatientInfo::class, 'user_id'); // Assuming user_id is the foreign key
}



  public function appointments()
    {
        return $this->hasMany(Appointments::class, 'userid');
    }


 



}