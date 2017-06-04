<?php

namespace App\Models;

use App\Traits\UuidModelTrait;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
	use UuidModelTrait;
    
    protected $fillable = [
        'name', 'building_id', 'floors', 'students',
    ];

     protected $casts = [
    	'name' => 'string',
    	'floors' => 'integer',
    	'students' => 'integer',
	];

	 public function building() {

    	return $this->belongsTo('App\Models\Building');
    }


}
