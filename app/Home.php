<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\invitation_info;

class Home extends Model
{
    protected $table='homes';
    protected $fillable = [
        'men_nick_name', 'woman_nick_name', 'title',
    ];

    public function invitation_info(){
    	return $this->belongsTo('Invitation_info');
    }
}
