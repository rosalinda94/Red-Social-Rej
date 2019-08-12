<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
   protected $table='persons';

    protected $fillable = [
        'name','lastName','partner', 'sex', 'avatar', 'email',
    ];

    public function user(){
          return $this->hasOne(User::class);
    }
    public function additional(){
          return $this->hasOne(User::class);
    }
    public function posts()
    {
      return $this->hasMany(Post::class);
    }
}
