<pre>
<?php

define('DATABASE_HOST', 'localhost:3308');
define('DATABASE_NAME', 'fausto');
define('DATABASE_USER', 'aluno');
define('DATABASE_PASSWORD', 'senac');

// $database_host = "localhost:3308";
// $database_name = "fausto";
// $database_user = "aluno";
// $database_password = "senac";
//$conexao_banco = new PDO('mysql:host='.$database_host.';dbname='.$database_name, $database_user, $database_password);

$conexao_banco = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME, DATABASE_USER, DATABASE_PASSWORD);

