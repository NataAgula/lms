<?php

namespace App\Models;

use App\Traits\UuidModelTrait;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
	use UuidModelTrait;
    
    protected $fillable = [
        'name', 'course_id', 'professor', 'students',
    ];

     protected $casts = [
    	'name' => 'string',
    	'professor' => 'string',
    	'students' => 'integer',
	];

	 public function course() {

    	return $this->belongsTo('App\Models\Course');
    }


}
