<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Invitation_info;

class Location extends Model
{
    protected $table='locations';
    protected $fillable = [
        '*'
    ];

    public function invitation_info(){
    	return $this->belongsTo('Invitation_info');
    }
}
