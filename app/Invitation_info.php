<?php

namespace App;
use App\Bride;
use App\Event;
use App\Gallery;
use App\Comment;
use App\Home;
use App\Location;
use App\Quote;
use App\Template;

use Illuminate\Database\Eloquent\Model;

class Invitation_info extends Model
{
    protected $table='invitation_infos';
    protected $fillable = [
        '*'
    ];

    public function bride(){
    	return $this->hasOne('Bride');
    }

    public function event(){
    	return $this->hasOne('Event');
    }

    public function gallery(){
    	return $this->hasOne('Gallery');
    }

    public function home(){
    	return $this->hasOne('Home');
    }

    public function location(){
    	return $this->hasOne('Location');
    }

    public function quote(){
    	return $this->hasOne('Quote');
    }

    public function template(){
    	return $this->hasMany('App\Template');
    }
}
