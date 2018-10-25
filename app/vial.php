<?php

namespace grabio;
use grabio\vial;

use Illuminate\Database\Eloquent\Model;

class vial extends Model
{
    //
    public function vial()
    {
    	return $this->belongsTo('grabio\vial','id');
    }

    
}
