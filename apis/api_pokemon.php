<div class="titulo">API Pokemon</div>

<?php 

function api(){
//file_get_contents - le o arquivo inteiro em uma string
    $url = "https://www.canalti.com.br/api/pokemons.json";
    $pokemon = json_decode(file_get_contents($url));

    foreach($pokemon->pokemon as $printar) {
        print_r("<br> Nome: $printar->name") ;
        print_r("<br> <img src = $printar->img /><hr>");

    }
}

$results = api();
return $results;