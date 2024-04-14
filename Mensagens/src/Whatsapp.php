<?php
namespace App\Src;
class Whatsapp implements IMensageiro {
    private $mensagem;

    public function enviar($mensagem){
        echo "Enviando mensagem via Whatsapp para: $mensagem\n";
    }

}