<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>LolRunas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/estilo.css">

     
</head>

<body>

    <header>
        <div>
            <nav style="z-index:12;" class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">LolRuna</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false"
                    aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="../index.php">Home <span class="sr-only">(página atual)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contato.php">Contato</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Mais
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Runas e builds para Magos</a>
                                <a class="dropdown-item" href="#">Runas e builds para Adc</a>

                                <a class="dropdown-item" href="#">Runas e builds para Guerreiro</a>
                                <a class="dropdown-item" href="#">Runas e builds para Jungle</a>
                                <a class="dropdown-item" href="#">Runas e builds para Suporte</a>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre.php">Sobre</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar"
                            aria-label="Pesquisar">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form>
                </div>
            </nav>

        </div>

        <div style="z-index: 0;height:100%; position:absolute;top:0px;width: 100%;"
            class="d-flex justify-content-center">
            <div style="text-align: center;" class="align-self-center text-center ">
                <h1>LolRuna</h1>
                <h6>Bem Vindo ao meu site!</h6>
            </div>

        </div>

    </header>



    <div class="container mt-4">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 h-50"
                        src="https://static2.lolwallpapers.net/2016/03/56fbe918747ca.jpg"
                        alt="Primeiro Slide">
 
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 h-50"
                        src="https://static2.lolwallpapers.net/2016/03/56f982777433b.png"
                        alt="Segundo Slide">

                       
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 h-50"
                        src="https://static2.lolwallpapers.net/2016/03/56e5574625c27.jpg"
                        alt="Terceiro Slide">
 
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>

        <section id="home">


            <div class="row  mt-4">
                <div class="col-sm-12 text-center">
                    <h1 class="display-4">Aurelion Sol</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                     <img class="img-fluid" src="../img/aurelion.png" width="80%">
                 
                </div>
               
               
            </div>

 
    </div>

    </section>
    <footer class="panel-footer" style="text-align:center;">
        <p>&copy João Paulo (Direitos Abertos)</p>
    </footer>


</body>

</php>