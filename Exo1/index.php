<?php

$personne = array(
    array ("nom" => "Brown", "adresse"=> "2, rue Thomas Edison", "CP" => "27000", "Ville" => "Evreux", "Email" => "toto@durand.com", "Date de naissance" => "1988-08-13"),
    array ("nom" => "Dupond", "adresse"=> "13, rue Mal Chance", "CP" => "66666", "Ville" => "Devil", "Email" => "dupond@durand.com", "Date de naissance" => "1966-06-06"),
    array ("nom" => "Mojito", "adresse"=> "9, rue de la soif", "CP" => "97000", "Ville" => "Martinique", "Email" => "Mojito@durand.com", "Date de naissance" => "1909-09-25"),
    array ("nom" => "Puppets", "adresse"=> "96, rue de la marionnette", "CP" => "69000", "Ville" => "Lyon", "Email" => "rire@durand.com", "Date de naissance" => "1989-10-23"),
);
//echo print_r($personne);
$keys = array_keys($personne);

for ($i = 0; $i < count($personne); $i++) {
    echo $keys[$i] . '<br>';

    foreach ($personne[$keys[$i]] as $key => $value) {
        $date_us = 'Date de naissance';
        $date_fr = date('d-m-Y', strtotime(str_replace('-', '/', $date_us)));
        echo $key . ' : ' . $value . '<br>';
    }

}

/*for ($ligne = 0; $ligne < 4; $ligne++){
    $numeroMembre = $ligne + 1;
    echo 'Membre n°' .$numeroMembre. '<br><ul>';

    for($colonnes = 0; $colonnes < 6; $colonnes++){
        echo'<li>' .$personne[$ligne][$colonnes]. '</li>';
    }

    echo '</ul>';*/

