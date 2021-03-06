<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class additional extends Model
{
    protected $table = 'additionals';
    
    protected $fillable = [
      'city', 'image','status','mobileNumber', 'date',  'user_id'
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function person (){
          return $this->hasOne(Person::class);
    }
}
