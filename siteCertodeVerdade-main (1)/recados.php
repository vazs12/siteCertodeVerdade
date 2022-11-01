<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Pessoal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="costum4.css">
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon-16x16.png">
</head>
<body>
    <div id="tudo">
        <header>
            <nav class="navbar navbar-expand-md fixed-top navbar-light bg-light">
                <section class="container">
                    <div class="row col-12 p-0">
                        <div class="col-7 col-sm-1">
                            <a class="navbar-brand" href="familia.html">
                                <img src="imagens/logo (2).png" alt="Logotipo Yasmin" width="100" height="100">
                            </a>
                            <button class="navbar-toggler float-end mb-3" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                        <div class="col-1 col-sm-8 collapse flex-row-reverse navbar-collapse" id="navbarCollapse">
                            <ul class="navbar-nav">
                                <li class="nav-item text-right">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="sobremim.html">Sobre mim</a>
                                </li>                  
                                <li class="nav-item">
                                    <a class="nav-link" href="familia.html">Família</a>
                                </li>                  
                                <li class="nav-item">
                                    <a class="nav-link" href="gostos.html">Gostos</a>
                                </li>   
                                <li class="nav-item">
                                    <a class="nav-link" href="recados.html">Recados</a>
                                </li>                 
                            </ul> 
                        </div>
                    </div>            
                </section>
            </nav>        
        </header> 
    <main> 
        <section id="lista-recados">
            <div class="container">                
            <h1>Meus recados</h1>
            <p><a href="recados-form.html">Clique aqui</a> para deixar o seu recado</p><br>
            
            <?php
                $sql = "SELECT * FROM recados";
                $conexao = new PDO('mysql:host=127.0.0.1;dbname=site-junior','root','');
                $resultado = $conexao->query($sql);
                $lista = $resultado->fetchAll();
            ?>

            <?php foreach ($lista as $linha): ?>
                <div class="balao">
                    <p class="recado"><?php echo $linha['recado'] ?></p>			
                    <h4 class="nome"><?php echo $linha['nome'] ?></h4>
                </div>
            <?php endforeach ?>

            </div>
        </section>        
    </main>

    <footer class="footer mt-auto py-3">
        <div class="container">
            <p class="text-center"><em>Desenvolvido por Júnior Gonçalves</em></p>
        </div>
    </footer>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
  </body>
</html>