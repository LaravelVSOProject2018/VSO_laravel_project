<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
    	'first_name','family','photo','description','user_id'];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function enrollments(){
    	return $this->belongsToMany('App\Enrollment');
    }

}
