<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    protected $table = 'likes';
    protected $fillable = [
      'id', 'name', 'post_id','user_id'
    ];

    public function user(){
      return $this->hasOne(User::class);
    }
    public function post (){
          return $this->hasOne(Post::class);
    }
}
