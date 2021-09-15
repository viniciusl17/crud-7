<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    protected $table='adress';

    public function relUser(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\User', 'id', 'id_user');
    }
}
