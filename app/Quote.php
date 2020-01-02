<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Invitation_info;

class Quote extends Model
{
    protected $table='quotes';
    protected $fillable = [
        '*'
    ];

    public function invitation_info(){
    	return $this->belongsTo('Invitation_info');
    }
}
