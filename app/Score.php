<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = [
    	'session_id','profile_id','score'];

    public function session(){
    	return belongsTo('App\Session');
    }


    public function profile(){
    	return belongsTo('App\Profile');
    }

 }
