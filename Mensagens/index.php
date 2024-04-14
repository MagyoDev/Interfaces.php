<?php
require 'vendor/autoload.php';
use App\Src\IMensageiro;
use App\Src\Email;
use App\Src\SMS;
use App\Src\Whatsapp;

$Whatsapp = new Whatsapp();
$Whatsapp->enviar("Alcino");

$SMS = new SMS();
$SMS->enviar("Adalberto");

$Email = new Email();
$Email->enviar("Richard");