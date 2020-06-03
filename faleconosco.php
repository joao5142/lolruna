
<!DOCTYPE html>
<html lang="pt-br">

<head>
<link rel="shortcut icon" href="img/4732Predator_rune.ico" />

    <title>LolRunas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/estilo.css">

    <script src="js/script.js"></script>
</head>

<body>

        <?php
             include 'topo.php';
        ?>

        <div class="container mt-4">

        <section id="home">


                <div class="row  mt-4">
                    <div class="col-sm-12 text-center">
                        <h1 class="display-4">Fale Conosco!</h1>
                    </div>
                </div>

                <div class="row text-left">
                    <div class="col-sm-6">
                        <form onSubmit="return verificar(this);" id="contactForm" class="form-group"  action="contatodb.php" method="post">
                            <label for="nome">Seu Nome :</label>
                            <input  name="nome" class="form-control mt-1 mb-3" type="text" placeholder="Digite Seu nome">

                            <label for="email">Seu E-mail:</label>
                            <input  name="email" class="form-control mt-1 mb-3" type="email"
                                placeholder="Digite Seu E-mail">

                            <label for="telefone">Seu Telefone:</label>
                            <input   name="telefone" class="form-control mt-1 mb-3" type="tel"
                                placeholder="Digite Seu Telefone">

                            <label for="assunto">Assunto</label>
                            <input   name="assunto" class="form-control mt-1 mb-3" type="text"
                                placeholder="Assunto">

                            <label for="mensagem">Mensagem</label>

                            <textarea   name="mensagem" class="form-control mt-1 mb-3"  id="" cols="20" rows="5">

                            </textarea> 

                            <button  type="submit" class="btn btn-primary">Enviar</button>
                        </form>

                    </div>
                </div>
            </section>

        </div>


    <footer class="panel-footer" style="text-align:center;">
        <p>&copy João Paulo (Direitos Abertos)</p>
    </footer>


</body>

