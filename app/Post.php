<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model 
{
 
  protected $table = 'posts';
  protected $fillable = [
    'title', 'body', 'image', 'user_id',
  ];

  public function user(){
    return $this->belongsTo(User::class);
  }
  public function person(){
    return $this->belongsTo(Person::class);
  }

  public function group(){
    return $this->belongsTo(Group::class);
  }
}


 