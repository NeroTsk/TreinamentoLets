<?php include('header.php') ?>

<div class="row justify-content-center">
    <div class="card">
        <div class="card-body">
            <?php

            $name = $_POST['name'];
            $email = $_POST['email'];
            $telefone = $_POST['telephone'];
            $assunto = $_POST['topic'];
            $msn = $_POST['message'];

            $texto = "Nome \n {$name} \n". 
            "Email \n {$email} \n". 
            "telefone \n {$telefone} \n".
            "assunto \n {$assunto} \n".
            "msn \n {$msn}" ;

            echo nl2br($texto);
            ?>
        </div>
    </div>
</div>
<?php include('footer.php') ?>
