<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    protected $table = 'reactions';
    public $fillable = [
      'user_id', 'reaction_type_id',
    ];
}
