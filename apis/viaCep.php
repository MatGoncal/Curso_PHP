<?php

function getAddress(){
    if(isset($_POST['cep'])){
        $cep = $_POST['cep'];

        $cep = filterCep($cep);

        if( isCep($cep)){
            $address = getAddressViaCep($cep);
            if (property_exists($address, 'erro')){
                $address = addressEmpty();
                $address->cep = 'CEP Inválido!';
            }
        } else {
            $address = addressEmpty();
            $address->cep = 'CEP Inválido!';
        }
    } else{
        $address = addressEmpty();
    }

    return $address;
}

function addressEmpty(){
    return (object) [
        'cep' => '',
        'logradouro' => '',
        'bairro' => '',
        'localidade' => '',
        'uf' => ''
    ];
}

function filterCep(String $cep):string{
//verifica tudo que nao é numero subtitui por nada, na variavel cel
    return preg_replace('/[^0-9]/', '', $cep);
}

function isCep (String $cep):bool{
//verifica oq esta irregular no cep
    return preg_match('/^[0-9]{5}-?[0-9]{3}$/',$cep);
}

function getAddressViaCep (String $cep){
    $url = "https://viacep.com.br/ws/{$cep}/json/";
    return json_decode(file_get_contents($url));
}
//assim como esta tras como objeto, se colocar o true dps do url
//tras como array associativo
