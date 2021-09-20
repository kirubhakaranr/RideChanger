<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name'
    ];


    protected $dates = ['created_at', 'updated_at'];

    public function states()
    {
        return $this->hasMany(\App\Models\State::class);
    }

}
