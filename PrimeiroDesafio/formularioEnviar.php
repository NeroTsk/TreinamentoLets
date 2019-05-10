<?php include('header.php') ?>

<div class="row justify-content-center">
    <div class="card text-white bg-dark" style="width: 26rem;">
        <div class="card-body">
            <?php

            $name = $_POST['name'];
            $email = $_POST['email'];
            $telefone = $_POST['telephone'];
            $assunto = $_POST['topic'];
            $msn = $_POST['message'];

            $texto = "Nome: \n {$name} \n <hr>". 
            "Email: \n {$email} \n <hr>". 
            "telefone: \n {$telefone} \n <hr>".
            "assunto: \n {$assunto} \n <hr>".
            "Mensagem: \n {$msn}" ;

            echo nl2br($texto);
            ?>
        </div>
    </div>
</div>
<?php include('footer.php') ?>
