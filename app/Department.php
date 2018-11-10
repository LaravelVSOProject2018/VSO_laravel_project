<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
    	'name','description'];

    public function programs(){
    	return $this->hasMany('App\Programs');
    }
}
