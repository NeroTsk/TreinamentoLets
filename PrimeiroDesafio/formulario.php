<?php include("header.php") ?>

<body>
    <h3 class="text-center">Formulario</h3>
    <form class="text-center" method="POST" action="formularioEnviar.php">
        <div class="row justify-content-center">
            <div class="card text-white bg-dark" style="width: 30em">
                <div class="card-body">
                    <div class="form-group">
                        <label for="ValidationName">Nome</label>
                        <input type="text" 
                            class="form-control" 
                            id="ValidationName" 
                            name="name" 
                            required>
                    </div>
                    <div class="form-group">
                        <label for="ValidationEmail">Email</label>
                        <input type="text" 
                            class="form-control" 
                            id="ValidationEmail" 
                            name="email" 
                            required>
                        <div class="form-group">
                            <label for="ValidationTelephone">Telefone</label>
                            <input type="text" 
                            class="form-control" 
                            id="ValidationTelephone" 
                            name="telephone">
                        </div>
                        <div class="form-group">
                            <label for="ValidationTopic">Assunto</label>
                            <input type="text" 
                                class="form-control" 
                                id="ValidationTopic" 
                                name="topic" 
                                required>
                        </div>
                        <div class="form-group">
                            <label>Mensagem</label>
                            <textarea type="text" 
                                rows="5" 
                                class="form-control" 
                                name="message" 
                                required>
                                
                            </textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </div>

    </form>

<?php include("footer.php") ?>