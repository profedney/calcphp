<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Calculadora 4 operações com css responsivo bootstrap e lógica em php" />
        <meta name="author" content="Edney Rossi" />
        <title>Calculadora 4 operações PHP</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top">Calculadora 4 operações PHP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">Calculadora</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Nós</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-primary bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Bem vindo a calculadora 4 operações PHP</h1>
                <p class="lead">Este aplicativo WEB foi construido utilizando HTML5, JavaScript e o Framework Bootstrap e lógica em PHP</p>
                <a class="btn btn-lg btn-light" href="#about">Vamos lá</a>
            </div>
        </header>
        <!-- About section-->
        <section id="about">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Calculadora PHP</h2>
                        <p class="lead">Entre com dois valores e clique no botão correspondente para calcular:</p>
                        <form action="index.php" method="post">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Primeiro valor</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="n1">
                              <br>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Segundo valor</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="n2">
                                <br>
                            </div>
                            
                            <button type="submit" value="Somar" class="btn btn-primary" onclick="calcSum()"> + Somar</button>&nbsp;&nbsp;<br><br>
                           

                            

                          </form>
                            <?php 
                            $n1=$_POST["n1"];
                            $n2=$_POST["n2"];
                            $soma=$n1 + $n2;
                            echo "Resultado: " . $soma . "<br>";     
                            ?>
                          
                    </div>
                </div>
            </div>
        </section>
        <!-- Services section-->
        <section class="bg-light" id="services">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Sobre esta calculadora</h2>
                        <p class="lead">Este aplicativo WEB foi construido utilizando HTML5, PHP e o Framework Bootstrap, faz parte de exercício proposto aos alunos para exercítar as habilidades de construção de paginas e aplicativos.</p>
                        <p><a class="btn btn-primary" href="https://github.com/profedney/calcphp">Código desta Calculadora no Github</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact section-->
        <section id="contact">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Quem Sou?</h2>
                        <p class="lead">Sou professor de informática Edney Rossi</p>
                        <div >
                            <h2 class="mb-4">Dá um Fork nos meus repositórios</h2>
                            <a class="btn btn-xl btn-light me-4" href="https://github.com/edneyrossi">Edney Rossi</a>
                            <a class="btn btn-xl btn-dark" href="https://github.com/profedney">Prof Edney</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            
            <div class="container px-4"><p class="m-0 text-center text-white">Copyleft &copy; A cópia e reprodução desse APP WEB é incentivada livremente</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
