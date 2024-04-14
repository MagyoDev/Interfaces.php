<?php
require 'vendor/autoload.php';
use App\Src\Personagem;
use App\Src\Mago;
use App\Src\Guerreiro;
use App\Src\Arqueiro;

$mago = new Mago();
$mago->Atacar("Bola de Fogo", "10");

$guerreiro = new Guerreiro();
$guerreiro->Atacar("Lâmina Gélida", "3");

$arqueiro = new Arqueiro();
$arqueiro->Atacar("Chuva de Flechas", "2");