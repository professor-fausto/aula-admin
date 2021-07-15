<?php

session_start();


/**
 * Pergunta se a variável is_logged na sessão
 * foi setada e define $logado como true
 */
$logado = isset($_SESSION['is_logged']) ? $_SESSION['is_logged'] : false;

/**
 * Pergunta se há uma variável na
 * URL contendo logout para dar um 
 * Session Destroy
 */
if (isset($_GET['logout'])) {
    session_destroy();
}


if (isset($is_login)) {
    // pessoa esta tentando fazer login
} else {
    if ($logado) {
        // a pessoa já fez login
    } else {
        // manda ela pro login
        header("Location: login.php");
    }
}
/**
 * Código acima resumido
 */
// if (!$logado && !isset($is_login)) {
//     header("Location: login.php");
// }
