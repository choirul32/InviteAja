<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $table='templates';
    protected $fillable = [
        'id', 'name',
    ];

    public function invitation_info(){
    	return $this->belongsTo('App\Invitation_info');
    }
}
