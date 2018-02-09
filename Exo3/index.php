<?php

if(isset($_POST['validation'])) {
    $tabError = array();
    $title = $_POST['titre'];
    $realisateur = $_POST['realisateur'];
    $acteurs = $_POST['acteurs'];
    $producteur = $_POST['producteur'];
    $anne = $_POST['annee'];
    $langue = $_POST['langue'];
    $category = $_POST['category'];
    $storyline = $_POST['synopsis'];
    $video = $_POST['url_video'];

    if ($title = "" && strlen($title) < 5) {
        array_push($tabError, 'Veuillez saisir un titre de film');
    }
    if ($realisateur = "" && strlen($realisateur) < 5) {
        array_push($tabError, 'Veuillez saisir un réalisateur');
    }
    if ($acteurs = "" && strlen($acteurs) < 5) {
        array_push($tabError, 'Veuillez saisir un acteur');
    }
    if ($producteur = "" && strlen($producteur) < 5) {
        array_push($tabError, 'Veuillez sasir un producteur');
    }
    if ($anne = "") {
        array_push($tabError, 'Veuillez sélectionner une année');
    }
    if ($langue = "") {
        array_push($tabError, 'Veuillez sélectionner une langue');
    }
    if ($category = "") {
        array_push($tabError, 'Veuillez sélectionner une catégorie');
    }
    if ($storyline = "" && strlen($storyline) < 5) {
        array_push($tabError, 'Veuillez sélectionner une catégorie');
    }
    if ($video = "") {
        array_push($tabError, 'Veuillez sélectionner une catégorie');
    }
    if (count($tabError) != 0) {
        $message = "<ul>";

        for ($i = 0; $i < count($tabErreur_article); $i++) {
            $message .= "<li>" . $tabErreur_article[$i] . "</li>";
        }
        $message .= "</ul>";
        echo($message);
        include("index.php");
    }
}
else{
    $connexion = connexion();
    $title = addcslashes(htmlentities($title));
    $realisateur =  addcslashes(htmlentities($realisateur));
    $acteurs =  addcslashes(htmlentities($acteurs));
    $producteur =  addcslashes(htmlentities($producteur));
    $storyline =  addcslashes(htmlentities($storyline));
    $video =  addcslashes(htmlentities($video));


    $requete = "insert into movies (ID_movie, title, actors, director, producer, year_of_producer, language, category, storyline, video) VALUES (NULL , '$titre', '$acteurs', '$realisateur', '$producteur', '$anne', '$langue', '$category','$storyline', '$category', '$video')";
    $resultatRequete = $connexion->exec($requete);
    $comptage = count($resultatRequete);

    if ($comptage == 1){

        echo ('Votre film a bien été ajouté à la base de donnée.' .'<br>' .'Merci de votre participation.');
    }



    }
