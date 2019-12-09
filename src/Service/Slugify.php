<?php


namespace App\Service;


class Slugify
{
    //methode pour generer un slug a partir chaine caracteres
    //dans wordpress etc., slug = identifiant d'un contenu perso
    //creation d'un service pour generer des slug lors de la creation et/ou edition

    public function generate(string $input) : string {


        setlocale(LC_ALL, 'fr_FR');
        $input = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $input);
        $input = preg_replace('#[^\w]+#i', '-', $input);
        $input = str_replace('--', '-', $input);
        $input = trim($input, '-');
        return strtolower($input);
    }

}
