<div class="titulo">API Star Wars</div>

<?php

function apiStarWars(){
    $url = "https://swapi.dev/api/people/";
    
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $ator) {

        echo "Ator:" .$ator->name. "<br>";
        echo "Altura:" .$ator->height. " cm <br>";
        echo "Peso:" .$ator->mass. "<br>";

        foreach($ator->films as $filme){
            echo "Filme:" . $filme . "<br>";
        } 
        echo "<hr>";
    }

}

$result = apiStarWars();
return $results;

