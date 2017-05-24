<?php

namespace App\Models;

use App\Traits\UuidModelTrait;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
	use UuidModelTrait;
    

   
    protected $fillable = [
        'name', 'faculty_id', 'mandatory_credits', 'optional_credits',
    ];

     protected $casts = [
    	'name' => 'string',
    	'mandatory_credits' => 'integer',
    	'optional_credits' => 'integer',
	];

	 public function faculty() {

    	return $this->belongsTo('App\Models\Faculty');
    }

     public function programCourses() {

    	return $this->hasMany('App\Models\ProgramCourse');
    }

}
