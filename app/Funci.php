<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funci extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'cpf', 'dt_nascimento','sexo','nomePai','nomeMae','obs',
    ];
    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

}
