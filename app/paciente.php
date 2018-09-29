<?php

namespace grabio;
use grabio\paciente;
use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    //
     public function pacientes()
  {
    return $this->belongsTo('paciente', 'id');
  }

}
