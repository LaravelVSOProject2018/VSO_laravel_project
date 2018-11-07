<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
	protected $fillable = [
    	'name','description','duration'];

    public function programs(){
    	return $this->belongsToMany('App\Program');
    }

}
