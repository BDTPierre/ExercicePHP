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