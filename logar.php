<metacharset="utf-8">
<?php

    $usuarioPadrao = "tetagood3@gmail.com";
    $senhaPadrao = "1234";

    $usuario = $_POST["email"];
    $senha = $_POST["senha"];

    if($usuario == $usuarioPadrao){
        if($senha == $senhaPadrao){
            echo "usuario logado";
        }else {
            echo "senha invalida!";
        }
        }else {
        echo "email invalido";
        }
?>