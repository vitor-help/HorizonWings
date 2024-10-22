<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservation;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }

    public function criar_reserva(Request $request){
        // Gera o ticket
        $ticket = $this->gerarTicketAleatorio();

        // Pega todos os dados do request
        $dados = $request->all();

         // Adiciona o campo 'ticket' aos dados do request
        $dados['ticket'] = $ticket;


        Reservation::create($dados);
        return view('index');
    }


    // Função para gerar o ticket aleatório
    private function gerarTicketAleatorio($tamanho = 6)
    {
        $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $ticket = '';
        $maxIndex = strlen($caracteres) - 1;

        for ($i = 0; $i < $tamanho; $i++) {
            $ticket .= $caracteres[rand(0, $maxIndex)];
        }

        return $ticket;
    }
}
