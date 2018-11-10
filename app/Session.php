<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = [
    	'name','start_datetime','duration','exam_id'];

    public function exam(){
    	return $this->belongsTo('App\Exam');
    }

    public function enrollments(){
    	return $this->belongsToMany('App\Enrollment');
    }

}
