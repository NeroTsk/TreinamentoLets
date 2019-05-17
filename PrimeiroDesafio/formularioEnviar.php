<?php include('header.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telefone = $_POST['telephone'];
    $assunto = $_POST['topic'];
    $menssagem = $_POST['message'];
?>

<div class="row justify-content-center">
    <div class="card text-white bg-dark" style="width: 26rem;">
        <div class="card-body">
            Nome: 
            <p> <?= $name ?> </p>
            Email:
            <p> <?= $email ?> </p> 
            Telefone:
            <p> <?= $telefone ?> </p>
            Assunto:
            <p> <?= $assunto ?> </p>
            Mensagem:
            <p> <?= $menssagem ?> </p>
        </div>
    </div>
</div>
<?php include('footer.php') ?>
