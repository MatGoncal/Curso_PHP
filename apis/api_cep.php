<?php
    include_once('viaCep.php');
    $address = getAddress()
?>

<div class="titulo">Api CEP</div>

<form action="#" class="POST">
    <p>Digite o CEP para encontrar o endereço.</p>
    <input type="text" placeholder="DIGITE UM CEP" name="cep" value="<?php echo $address->cep ?>">
    <input type="submit"><br>
    <input type="text" placeholder="Rua" name="rua" value="<?php echo $address->logradouro ?>">
    <input type="text" placeholder="Bairro" name="bairro" value="<?php echo $address->bairro ?>">
    <input type="text" placeholder="Cidade" name="cidade" value="<?php echo $address->localidade ?>">
    <input type="text" placeholder="Estado" name="estado" value="<?php echo $address->uf ?>">
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
