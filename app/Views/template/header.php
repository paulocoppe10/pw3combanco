<!-- inicio do header -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Seja bem vindo</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="home">Home</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link" href="quemsomos">Quem Somos</a>
                            <a class="nav-link" href="contato">Contato</a>
                            <a class="nav-link" href="login">Login</a>
                            <?php
                                $session = \Config\Services::session();

                                if($session->get("logado")){
                            ?>
                            <a class="nav-link" href="cadastro">Cadastro</a>
                            <a class="nav-link" href="pessoa">Pessoas</a>
                            <a class="nav-link" href="sair">sair</a>
                            <?php
                                }
                            ?>
                            
                        </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- fim do header -->