<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Invitation_info;

class Event extends Model
{
    protected $table='events';
    protected $fillable = [
        '*'
    ];

    public function invitation_info(){
    	return $this->belongsTo('Invitation_info');
    }
}
