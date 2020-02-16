<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerSorteio extends Controller
{
    private $quantidadeNumeroPermitido = 60;
    private $listaNumerosSorteio;
    private function criaListaNumerosSorteio()
    {
        $listaNumerosSorteio = [];
        // Como definido, gera uma lista de 1 até a quantidade pré-definida
        for ($i=1; $i <= $this->quantidadeNumeroPermitido ; $i++) {
            $listaNumerosSorteio[] = $i;
        }
        $this->setListaNumerosSorteio($listaNumerosSorteio);

        return $this;
    }
}



