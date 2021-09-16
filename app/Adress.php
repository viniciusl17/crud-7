<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    protected $table='adress';

    protected $fillable = [
        'rua', 'bairro', 'cidade', 'estado',
    ];

    public function relUser(): \Illuminate\Database\Eloquent\Relations\belongsTO
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
