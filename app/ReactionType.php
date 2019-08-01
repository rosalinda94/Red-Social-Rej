<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ReactionType extends Model
{
    protected $table = 'reactions_types'
    public $fillable = [
      'name', 'icon',
    ];

    public function reactions(){
      return $this->hasMany(Reaction::class);
    }

}
