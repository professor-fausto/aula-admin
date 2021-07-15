<?php
// Titulo da página
$titulo = "Administrador";

// Define que esta página é um login para não 
// realizar o looping de redirecionamento
$is_login = true;

// inclui o cabeçalho normal
include_once('inc/header.php');

// incluir as funcionalidades do login
include_once("inc/usuario/executa-login.php");

?>


<div class="container">
    <div class="row">
        <div class="col-12">

            <form action="" method="post" class="my-5 shadow p-4 ">
                <label for="id_email" class="form-label">Digite seu e-mail</label>
                <input type="email" name="email" id="id_email" class="form-control">
                <label for="id_senha" class="form-label">Digite sua senha</label>
                <input type="password" class="form-control" name="senha" id="id_senha">
                <input type="submit" class="btn btn-primary mt-3" value="Entrar">
                <?php echo $aviso; ?>
            </form>

        </div>
    </div>
</div>

<?php include_once('inc/footer.php'); ?>