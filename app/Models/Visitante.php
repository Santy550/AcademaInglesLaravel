<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    public $table = 'visitante';

    use HasFactory;

    protected $fillable = [
        'nombre',
        'email',
        'mensaje'

    ];

    protected $hidden = [
        'password',
        'remember_token',
        'mensaje'
    ];


}
