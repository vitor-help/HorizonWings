<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table="reservation";
    protected $fillable = [
        'id_reserva',
        'origem',
        'destino',
        'data_partida',
        'data_retorno',
        'adulto',
        'crianca',
        'ticket',
        'classe',
    ];
}
