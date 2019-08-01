<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    protected $table='groups';
    
    protected $fillable = [
        'name',
    ];

    public function posts(){
    	return $this->hasMany(post::class);
    }
}
