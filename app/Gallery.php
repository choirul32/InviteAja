<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\invitation_info;

class Gallery extends Model
{
    protected $table='galleries';
    protected $fillable = [
        '*'
    ];

    public function invitation_info(){
    	return $this->belongsTo('Invitation_info');
    }
}
