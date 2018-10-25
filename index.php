<?php
    function loadClass ($ClassName) {
        if(file_exists('Class/' . $ClassName . '.php')) {
            require_once('Class/' . $ClassName . '.php');
            var_dump($ClassName);
        } else {
            echo '<span style="background-color: #FF0000;">La classe "' . $ClassName . '" n\'existe pas.</span>';
        }
    }

    spl_autoload_register('loadClass');

    $perso1 = new Personnage("Merlin");
    var_dump($perso1);

    $crier = $perso1->crier();
    echo $crier;

    $perso1->regenerer();
    var_dump($perso1);

    $etat = $perso1->mort();
    var_dump($etat);
    if ($etat === true) {
        echo $perso1->getNom() . ' est mort :(.<br>';
    } else {
        echo $perso1->getNom() . ' est vivant.<br>';
    }
    


    $perso2 = new Personnage("Henry");
    var_dump($perso2);

    $crier = $perso2->crier();
    echo $crier;

    $perso2->regenerer(5);
    var_dump($perso2);

    $etat = $perso2->mort();
    var_dump($etat);
    if ($etat === true) {
        echo $perso2->getNom() . ' est mort :(.<br>';
    } else {
        echo $perso2->getNom() . ' est vivant.<br>';
    }

    $perso1->attaque($perso2);

    var_dump($perso1);
    var_dump($perso2);

    $etat = $perso2->mort();
    var_dump($etat);
    if ($etat === true) {
        echo $perso1->getNom() . ' a influgé ' . $perso1->getAttaque() . ' attaque à ' . $perso2->getNom() . ' donc il est mort :(.<br>';
    } else {
        echo $perso1->getNom() . ' a influgé ' . $perso1->getAttaque() . ' attaque à ' . $perso2->getNom() . ' donc il  est vivant avec ' . $perso2->getVie() . ' vie <br>';
    }    