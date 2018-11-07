<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $fillable = [
    	'profile_id','program_id','exam_id','session_id'];

    public function profile(){
    	return $this->belongsTo('App\Profile');
    }
}
