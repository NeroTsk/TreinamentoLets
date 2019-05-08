<?php include("header.php") ?>

<body>
    <h3 class="text-center">Formulario</h3>
    <form class="text-center" method="POST" action="formularioEnviar.php">
        <div class="row justify-content-center">
            <div class="card text-white bg-dark" style="width: 30em">
                <div class="card-body">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email">
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" class="form-control" name="telephone">
                        </div>
                        <div class="form-group">
                            <label>Assunto</label>
                            <input type="text" class="form-control" name="topic">
                        </div>
                        <div class="form-group">
                            <label>Mensagem</label>
                            <textarea type="text" rows="5" class="form-control" name="message">
                                
                            </textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </div>

    </form>

<?php include("footer.php") ?>