<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class additional extends Model
{
    protected $table = 'additionals';
    protected $fillable = [
      'city', 'image','status', 'user_id'
    ];

    public function user(){
      return $this->hasOne(User::class);
    }
    public function person (){
          return $this->hasOne(Person::class);
    }
}
