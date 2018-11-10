<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
    	'name','description','duration','quota','department_id'];

    public function department(){
    	return $this->belongsTo('App\Department');
    }

    public function exams(){
    	return $this->hasMany('App\Exam');
    }


}
