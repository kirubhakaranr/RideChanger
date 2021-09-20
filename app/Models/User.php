<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',
        'otp',
        'is_account_created',
        'os',
        'fcm_token',
        'voip_token',
        'is_Active'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFirstLetterAttribute()
    {
       return (!empty($this->name))?Str::ucfirst($this->name[0]):null;
    }

    public function getStatusHtmlAttribute()
    {
        if($this->is_active ==1){//Active
            return '<span class="badge badge-pill  badge-light-success">Active</span>';
        }elseif($this->is_active ==0){//InActive
            return '<span class="badge badge-pill  badge-light-danger">InActive</span>';
        }
    }

    public function scopeActive($q)
    {
        $q->where('is_active',1);
    }

    public function user_detail()
    {
        return $this->hasOne(\App\Models\UserDetail::class);
    }

}
