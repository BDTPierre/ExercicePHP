<?php
require('data.php');

function template($new) {
    return 
        '<h2>Bonjour ' . $new["prenom"] . ' !</h2>
        Vous avez choisi le model ' . $new["model"] . ' <br>
        Elle a été vendu ' . $new["vendu"] . ' fois lors de ce mois-ci. <br>
        Il en reste plus que ' . $new["stock"] . ' exemplaire dans notre concession. <br>
        Nous vous souhaitons une agreable journée ' . $new["prenom"] . ' !<br>
        Cordialement, <br>
        Pierre';
};

function presentation($prenom, $age, $ville) {
    return 
       '<p> Je m\'appelle ' . $prenom . ', ' . 'j\'ai ' . $age . 'ans et je viens de ' . $ville . '.</p>';
};


// EXERCICE
// 1-Créez une fonction addition qui prend deux paramètres et (renvoie) affiche leur somme.

function addition ($nb1, $nb2) {
    echo $nb1+$nb2;
};

// 2-Élaborez une fonction calcul qui prend deux nombres et renvoie à la fois leur somme, leur différence, et leur produit.

function division ($nb1, $nb2) {
    echo $nb1/$nb2;
};

// 3-Créez une fonction incrementer qui utilise une variable globale pour stocker et afficher le nombre d'appels à la fonction.


// 4-Créez une fonction salutation qui prend en paramètre un nom et affiche "Bonjour, [nom] !" par défaut si aucun nom n'est fourni.

// 5-Définissez une fonction division qui prend deux paramètres et renvoie le résultat de la division. 
//     -Si le dénominateur est zéro, la fonction doit renvoyer "zero n'est pas divisible"



