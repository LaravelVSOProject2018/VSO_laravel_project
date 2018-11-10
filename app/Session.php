<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = [
    	'kind','start_datetime','end_datetime','exam_id'];

    public function exam(){
    	return $this->belongsTo('App\Exam');
    }

    public function enrollments(){
    	return $this->belongsToMany('App\Enrollment');
    }

}
