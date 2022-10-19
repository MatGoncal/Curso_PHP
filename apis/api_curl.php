<div class="titulo">API com CURL</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $url = "https://swapi.dev/api/people/";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $resultado = json_decode(curl_exec($ch));

        foreach($resultado->results as $ator){
            echo "Nome: " . $ator->name . "<br>";
            echo "Altura:" .$ator->height. " cm <br>";
            echo "Peso:" .$ator->mass. "<br>";
            echo "<hr>";
        }
    ?>
</body>
</html>