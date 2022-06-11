<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    public $table = 'clase';

    use HasFactory;

    protected $fillable = [
        'horario_inicio',
        'horario_fin',
        'clase_id'
    ];

    protected $hidden = [
        'remember_token'
    ];

    public function horarioClase() {
        return $this->belongsTo(Clase::class);
    }

}
