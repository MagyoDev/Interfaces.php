<?php
namespace App\Src;
class Arqueiro implements Personagem{
    public function atacar($skill, $mana){
        $classe = 'Arqueiro';

        echo "
        \n Classe: $classe
        \n Skill: $skill
        \n Mana: $mana
        ";
    }
}