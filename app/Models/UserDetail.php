<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDetail extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];

    public function state()
    {
      return $this->belongsTo(\App\Models\State::class);
    }

    public function city()
    {
      return $this->belongsTo(\App\Models\City::class);
    }

}
