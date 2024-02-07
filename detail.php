<?php
require_once("data.php");

$id = $_GET["id"];

foreach ($autos as $auto) {
    if ($auto["id"] == $id) { 
    echo
    '<article>
    <h2>Model :' . $auto["model"] . ' !</h2>
    <p>Vendu :' . $auto["vendu"] . '</p>
    <p>Stock :' . $auto["stock"] . '</p>
    <a href="detail.php?id='.$auto['id'].'">
        <img width="80" src="'.$auto['image'].'" alt="logo">
    </a>
    </article>';
    }
}

