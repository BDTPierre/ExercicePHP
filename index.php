<?php
$cars = array (
    array("prenom"=>"Pierre","model"=>"Volvo","vendu"=>22,"stock"=>18),
    array("prenom"=>"Paul","model"=>"BMW","vendu"=>33,"stock"=>5),
    array("prenom"=>"Camille","model"=>"Saab","vendu"=>3,"stock"=>88),
    array("prenom"=>"Imen","model"=>"Land Rover","vendu"=>45,"stock"=>2),
    array("prenom"=>"Amine","model"=>"Land Rover","vendu"=>45,"stock"=>2),
  
  );

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
    echo "<h2>Bonjour $new[prenom]</h2>"; 
    echo "<p>Vous avez choisi le model $new[model]</p>";
    echo "<p>Elle a été vendu $new[vendu] fois lors de ce mois-ci.</p>";
    echo "<p>Il en reste plus que $new[stock] exemplaire dans notre concession.</p>";
    echo "<p>Nous vous souhaitons une agreable journée $new[prenom] !</p>"; 
endforeach;