<?php
require("card_template.php");


for ($i=0; $i < count($cars); $i++) {
    echo "Model : " . $cars[$i]["model"] . "<br>"; 
    echo "Vendu : " . $cars[$i]["vendu"] . "<br>";
    echo "Stock : " . $cars[$i]["stock"] . "<br>";
    echo "<br>";     
};


foreach ($cars as $new) {
    echo "<h2>Bonjour " . $new["prenom"] . "</h2>";
    echo "<p>Vous avez choisi le model : " . $new["model"] . "</p>";
    echo "<p>Elle a été vendu " . $new["vendu"] . " fois lors de ce mois-ci.</p>";
    echo "<p>Il en reste plus que " . $new["stock"] . " exemplaire dans notre concession.</p>";
    echo "<p>Nous vous souhaitons une agreable journée " . $new["prenom"] . "!</p>"; 
} 

foreach ($cars as $new):
    echo template($new);
endforeach;
