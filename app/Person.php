<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table='person';

    protected $fillable = [
        'name','last_name','partner', //'sex', 'avatar', 'email',
    ];

   /* public function user(){
    	return $this->belongsTo(user::class);
    }*/

    
}
