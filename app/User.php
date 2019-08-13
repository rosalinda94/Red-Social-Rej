<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
  
    public function person (){
          return $this->hasOne(Person::class);
    }

    public function additional()
    {
          return $this->hasOne(User::class);
    }

    public function posts()
    {
      return $this->hasMany(Post::class);
    }

    public function like()
    {
        return $this->hasMany(Like::class, 'user_id');
    }
}
