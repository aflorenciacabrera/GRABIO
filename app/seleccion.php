<?php

namespace grabio;

use Illuminate\Database\Eloquent\Model;

class seleccion extends Model
{
    //
	public function oportunidad()
    {
    	return $this->belongsTo('inetweb\tecnico','tecnico_id');
    }
    //
    public function productor()
    {
    	return $this->belongsTo('inetweb\investigador','investigador_id');
    }

    public function capacidad()
    {
    	return $this->belongsTo('inetweb\biobanco','biobanco_id');
    }

}
