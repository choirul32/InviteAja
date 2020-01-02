<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Invitation_info;

class Bride extends Model
{
    protected $table='brides';
    protected $fillable = [
        '*'
    ];

    public function invitation_info(){
    	return $this->belongsTo('Invitation_info');
    }
}
