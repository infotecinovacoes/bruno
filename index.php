<?php

if (isset($_POST['submit'])) {
    // print_r('Nome: ' . $_POST['nome']);
// print_r('<br>');
// print_r('Email: ' . $_POST['email']);
// print_r('<br>');
// print_r('Telefone: ' . $_POST['telefone']);
// print_r('<br>');
// print_r('Sexo: ' . $_POST['genero']);
// print_r('<br>');
// print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
// print_r('<br>');
// print_r('Cidade: ' . $_POST['cidade']);
// print_r('<br>');
// print_r('Estado: ' . $_POST['estado']);
// print_r('<br>');
// print_r('Endereço: ' . $_POST['endereco']);

    include_once('conectar.php');

    $nome = $_POST['nome'];
    // $email = $_POST['email'];
    // $senha = $_POST['senha'];
    // $confirmarSenha = $_POST['confirmaSenha'];


    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome)
    VALUES('$nome')");

}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário GN</title>
</head>

<body>
    <div class="content">
        <h1>Formulário 🔥</h1>
        <form id="form" action="index.php" method="post">
            <div>
                <input type="text" placeholder="Digite seu nome" class="inputs required" oninput="nameValidate()">
                <label class="span-required">Nome deve ter no mínimo 3 caracteres</label>
            </div>
            <!-- <button type="submit" id="botao">Enviar</button> -->
            <input type="submit" id="botao" name="teste">
        </form>
</body>

<script>
    const form = document.getElementById('form');
    const campos = document.querySelectorAll('.required');
    const label = document.querySelectorAll('.span-required');
    const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    const botao = document.getElementById('botao');

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        nameValidate();
        emailValidate();
        mainPasswordValidate();
        comparePassword();
    });

    function setError(index) {
        campos[index].style.border = '2px solid #e63636';
        spans[index].style.display = 'block';
    }

    function removeError(index) {
        campos[index].style.border = '';
        spans[index].style.display = 'none';
    }

    function nameValidate() {
        if (campos[0].value.length < 3) {
            setError(0);
        }
        else {
            removeError(0);
        }
    }

    function emailValidate() {
        if (!emailRegex.test(campos[1].value)) {
            setError(1);
        }
        else {
            removeError(1);
        }
    }

    function mainPasswordValidate() {
        if (campos[2].value.length < 8) {
            setError(2);
        }
        else {
            removeError(2);
            comparePassword();
        }
    }

    function comparePassword() {
        if (campos[2].value == campos[3].value && campos[3].value.length >= 8) {
            removeError(3);
        }
        else {
            setError(3);
        }
    }

</script>

</html>