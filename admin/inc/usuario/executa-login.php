<?php
$aviso = "";

if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (strlen($email) < 3) {
        $aviso .= "Você precisa digitar um e-mail.";
    }

    if (strlen($senha) < 3) {
        $aviso .= "Você precisa digitar sua senha.";
    }
} elseif (isset($_POST)) {
    $aviso .= "Dados inválidos.";
}
