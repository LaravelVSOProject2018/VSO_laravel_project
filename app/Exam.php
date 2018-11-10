<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
	protected $fillable = [
    	'name','description','program_id'];

    public function program(){
    	return $this->belongsTo('App\Program');
    }

    public function sessions(){
    	return $this->hasMany('App\Session');
    }

}
