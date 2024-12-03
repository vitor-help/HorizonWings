<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table="reservation";
    protected $fillable = [
        'id_usuario',
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

    public function consultarReservas(){
        try {
            return  Reservation::where('id_usuario', auth()->id())->get();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function criar_reserva($dados){
        Reservation::create($dados);
    }
}
