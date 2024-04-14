<?php
namespace App\Src;
class Guerreiro implements Personagem{
    public function atacar($skill, $mana){
        $classe = 'Guerreiro';

        echo "
        \n Classe: $classe
        \n Skill: $skill
        \n Mana: $mana
        ";
    }
}