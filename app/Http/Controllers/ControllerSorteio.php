<?php

namespace App\Http\Controllers;

use App\aposta;
use Illuminate\Http\Request;

class ControllerSorteio extends Controller
{
    private $quantidadePreDefinida = 60;
    private $listaNumerosSorteio;
    private $quantidadeDezenasVitoria = 6;
    private $resultado;
    private $aposta;
    private $apostadores = [];

    public function __construct(aposta $aposta)
    {
        $this->aposta = $aposta;
    }


    public function sortear()
    {
        $this->criaListaNumerosSorteio()
            ->setResultado($this->sortearDezenasAleatorias($this->quantidadeDezenasVitoria))
            ->getApostas();

        foreach ($this->getApostadores() as $aposta) {
            $quantidadeDezenasSorteadas = $this->quantidadeDezenasSorteadas($aposta['aposta']);
            $arrayDadosExibicao['dados'][] = [
                "nome"  => $aposta['nome'],
                "email" =>  $aposta["email"],
                "cep" =>  $aposta["cep"],
                "estado" =>  $aposta["estado"],
                "cidade" =>  $aposta["cidade"],
                "rua" =>  $aposta["rua"],
                "numero" =>  $aposta["numero"],
                'quantidadeDezenasSorteadas'   => $quantidadeDezenasSorteadas,
                'aposta'                       => $this->montaQuantidadeAcertos($aposta['aposta']),
                'ganhador'                     => $quantidadeDezenasSorteadas === $this->quantidadeDezenasVitoria
            ];
        }
        $arrayDadosExibicao['resultado'] = implode(",", $this->getResultado());

        return view('admin/apostas/sorteados', $arrayDadosExibicao);
    }

    private function montaQuantidadeAcertos($aposta)
    {
        $retorno = [];
        // Pega numeros que nao foram encontrados nos numeros sorteados
        $numerosNaoEncontrados = array_diff($aposta, $this->getResultado());
        foreach ($aposta as $key => $value) {
            // Verifica se o valor é um desses numeros não encontrados
            if (in_array($value, $numerosNaoEncontrados)) {
                // Se sim, a posição recebe somente o valor
                $retorno[] = $value;
            } else {
                // Se não o valor fica em negrito (porque foi encontrado)
                $retorno[] = "<strong>$value</strong>";
            }
        }

        return implode(',', $retorno);
    }

    private function quantidadeDezenasSorteadas($jogo)
    {
        // O array diff, retorna elementos do primeiro array que nao foram encontrados no segundo.
        // Sendo assim, eu pego o total de numeros jogados e subtraio na quantidade de numeros do jogo que não foram encontrados no array de resultado
        // Ou seja, o valor retornado é a quantidade de numeros sorteados
        return (count($jogo) - count(array_diff($jogo, $this->getResultado())));
    }

    private function criaListaNumerosSorteio()
    {
        $listaNumerosSorteio = [];
        // Como definido, gera uma lista de 1 até a quantidade pré-definida
        for ($i = 1; $i <= $this->quantidadePreDefinida; $i++) {
            $listaNumerosSorteio[] = $i;
        }
        $this->setListaNumerosSorteio($listaNumerosSorteio);

        return $this;
    }

    private function sortearDezenasAleatorias($quantidadeDezenas): array
    {
        // Busca a lista de numeros que podem ser escolhidos
        $listaNumerosSorteio = $this->getListaNumerosSorteio();
        // Inicializa a variável que vai receber os numeros escolhidos
        $arrayNumerosEscolhidos = [];

        // A iteração limita a quantidade de numeros escolhidos com base na definição da variavel $quantidadeDezenas
        for ($i = 0; $i < $quantidadeDezenas; $i++) {
            // Captura um índice de forma aleatória do array de numeros disponíveis a escolha
            $indiceEscolhido         = array_rand($listaNumerosSorteio);
            // Com o índice, define qual número foi escolhido, pegando o valor na posição do índice
            $numeroEscolhido         = $listaNumerosSorteio[$indiceEscolhido];
            // Faz uma atribuição do numero escolhido dentro do array de numeros escolhidos
            $arrayNumerosEscolhidos[] = $numeroEscolhido;
            // Retira o número (remove a respectiva posição do número) que foi escolhido da lista dos próximos numeros aptos a serem escolhidos, evitando duplicidade
            unset($listaNumerosSorteio[$indiceEscolhido]);
        }

        // Ordena o array de numeros de forma ascendente
        sort($arrayNumerosEscolhidos);

        return $arrayNumerosEscolhidos;
    }

    private function getApostas()
    {
        //busco as apostas cadastras no banco
        $apostas = $this->aposta->all();

        //pecorro todas as apostas e crio 1 array com todas essas apostas.
        foreach ($apostas as $value) {
            $this->setApostadores([
                "nome"  => $value['nome'],
                "email" =>  $value["email"],
                "cep" =>  $value["cep"],
                "estado" =>  $value["estado"],
                "cidade" =>  $value["cidade"],
                "rua" =>  $value["rua"],
                "numero" =>  $value["numero"],
                "aposta" =>  explode(",", $value['aposta'])
            ]);
        }
    }

    /**
     * Get the value of listaNumerosSorteio
     */
    public function getListaNumerosSorteio()
    {
        return $this->listaNumerosSorteio;
    }

    /**
     * Set the value of listaNumerosSorteio
     *
     * @return  self
     */
    public function setListaNumerosSorteio($listaNumerosSorteio)
    {
        $this->listaNumerosSorteio = $listaNumerosSorteio;

        return $this;
    }

    /**
     * Get the value of resultado
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * Set the value of resultado
     *
     * @return  self
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;

        return $this;
    }

    /**
     * Get the value of apostadores
     */
    public function getApostadores($indice = null)
    {
        if (!is_null($indice)) {
            return $this->apostadores[$indice];
        } else {
            return $this->apostadores;
        }
    }

    /**
     * Set the value of apostadores
     *
     * @return  self
     */
    public function setApostadores($apostadores)
    {
        $this->apostadores[] = $apostadores;

        return $this;
    }
}
