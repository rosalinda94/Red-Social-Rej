<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

  protected $table = 'posts';

  protected $fillable = [
     'body', 'image', 'user_id', 'group_id', 'etiqueta_id'
  ];

  protected $appends = ['liked'];

  public function user(){
    return $this->belongsTo(User::class);
  }

  public function person(){
    return $this->belongsTo(Person::class);
  }

  public function group(){
    return $this->belongsTo(Group::class);
  }

  public function like(){
    return $this->hasMany(Like::class);
  }

  public function getLikedAttribute() 
  {
    return $this->like->contains(auth()->id());
  }

}
