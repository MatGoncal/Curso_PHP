<?php
    include_once('viaCep.php');
    $address = getAddress()
?>

<div class="titulo">Api CEP</div>

<form action="#" class="POST">
    <p>Digite o CEP para encontrar o endereço.</p>
    <input type="text" placeholder="DIGITE UM CEP" name="cep">
    <input type="submit">
    <input type="text" placeholder="RUA" name="rua" value="<?= $address->logradouro ?>">
    <input type="text" placeholder="BAIRRO" name="bairro" value="<?= $address->bairro ?>">
    <input type="text" placeholder="CIDADE" name="cidade" value="<?= $address->localidade ?>">
    <input type="text" placeholder="ESTADO" name="estado" value="<?= $address->uf ?>">
</form>

<style>
    form {
        display: flex;
        flex-direction: column;
        width: 30vw;
        height: 40vh;
        margin: 10vh auto;
        justify-content: space-around;
    }

    input{
        font-size: 1.2rem;
    }
</style>
