<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = [
<<<<<<< HEAD
    	'name','start_datetime','duration','exam_id'];
=======
    	'kind','start_datetime','end_datetime','exam_id'];
>>>>>>> b87495bb90a8fafbe4840818e379f2229f64723a

    public function exam(){
    	return $this->belongsTo('App\Exam');
    }

    public function enrollments(){
    	return $this->belongsToMany('App\Enrollment');
    }

}
