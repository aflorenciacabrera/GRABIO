<?php

namespace grabio;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use grabio\user;
use grabio\biobanco;
use grabio\paciente;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'avatar','name', 'email','nombre','apellido', 'rol','telefono','hospital','trabajo', 'archivo' ,'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


public function users()
  {
    return $this->belongsTo('User', 'id');
  }
   

 public function biobancos()
  {
    return $this->belongsToMany('grabio\biobanco');
  }

   public function roles()
{
    return $this
        ->belongsToMany('grabio\Role')
        ->withTimestamps();
}
 


    public function authorizeRoles($roles)
{
    if ($this->hasAnyRole($roles)) {
        return true;
    }
    abort(401, 'Esta acción no está autorizada.');
}
public function hasAnyRole($roles)
{
    if (is_array($roles)) {
        foreach ($roles as $role) {
            if ($this->hasRole($role)) {
                return true;
            }
        }
    } else {
        if ($this->hasRole($roles)) {
            return true;
        }
    }
    return false;
}
public function hasRole($role)
{
    if ($this->roles()->where('name', $role)->first()) {
        return true;
    }
    return false;
}

    
}
