<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reaction_type extends Model
{
    protected $table = 'reactions_types'
    public $fillable = [
      'name', 'icon',
    ];

    public function reactions(){
      return $this->hasMany(Reaction::class);
    }
    
}
