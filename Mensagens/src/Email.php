<?php
namespace App\Src;
class Email implements IMensageiro {
    private $mensagem;

    public function enviar($mensagem){
        echo "Enviando e-mail para: $mensagem\n";
    }

}