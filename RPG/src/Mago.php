<?php
namespace App\Src;
class Mago implements Personagem{
    public function atacar($skill, $mana){
        $classe = 'Mago';

        echo "
        \n Classe: $classe
        \n Skill: $skill
        \n Mana: $mana
        ";
    }
}