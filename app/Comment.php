<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Invitation_info;

class Comment extends Model
{
    protected $table='comments';
    protected $fillable = [
        '*'
    ];

    public function invitation_info(){
    	return $this->belongsTo('Invitation_info');
    }
}
