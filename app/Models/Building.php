<?php

namespace App\Models;

use App\Traits\UuidModelTrait;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
	use UuidModelTrait;
   
    protected $fillable = [
        'name', 'address',
    ];

    protected $casts = [
    	'name' => 'string',
        'address' => 'string',
    ];

    public function rooms() {

    	return $this->hasMany('App\Models\Room');
    }

}
