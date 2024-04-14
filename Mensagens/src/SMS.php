<?php
namespace App\Src;
class SMS implements IMensageiro {
    private $mensagem;

    public function enviar($mensagem){
        echo "Enviando mensagem via SMS para: $mensagem\n";
    }

}