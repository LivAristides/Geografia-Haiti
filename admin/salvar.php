<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAITI - geografia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg py-4 fixed-top navbar-light bg-body">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <h4 class="fw-bold">Haiti</h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03"
                aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php #services">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dados.php">Dados Gerais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hist.php">História</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="geo.php">Geografia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="conf.php">Conflitos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?p=contato/salvar">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


     <!-- Hero -->
     <div id="hero" class="section-padding devider">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-5">
                    <img src="./assets/img/mascara.png" width="500px" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6">
                    <h1 class="fw-bold display-4">Cont<span class="text-info">ato</span></h1>
                    <p></p>
                </div>
            </div>
        </div>
    </div>


</br>
<a href="index.php" class="btn btn-outline-danger float-right" > <i class="bi bi-arrow-left"> Voltar</i></a>

<div id="cont" class="section-padding devider ">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="intro-section text-center mb-5">
                                <h1 class="fw-bold">Contato</h1>
                                <p class="mx-auto"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <form action="#" method="post" class="row g-3">
                                <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Nome</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" name="txtnome" >
                                </div>
                                <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Email</label>
                                    <input type="email" class="form-control" id="formGroupExampleInput" name="txtemail" >
                                </div>
                                <div class="form-group col-md-12">
                                <label for="formGroupExampleInput">Comentário</label>
                                    <textarea name="txtdescricao" class="form-control" rows="5"></textarea>
                                </div>
                                <button type="submit" class="btn btn-outline-info" name="btnenviar" value="Enviar">Enviar</button>
                            </form>
</br>      
            <?php
if (filter_input(INPUT_POST, 'btnenviar')) {
    $nome = filter_input(INPUT_POST, 'txtnome');
    $email = filter_input(INPUT_POST, 'txtemail');
    $descricao = filter_input(INPUT_POST, 'txtdescricao');

   include_once '../class/Contato.php';
   $cont = new Contato();

   $cont->setNome($nome);
   $cont->setEmail($email);
   $cont->setDescricao($descricao);

   $cont->salvar();
   ?>
<div class="alert alert-info" role="alert">
   <?= $cont->getNome() . " - " . $cont->getEmail() . " - " . $cont->getDescricao() ?>
   <?php
}
?>
                        </div>
                    </div>
                </div>
            </div>


<footer class="">
                <div class="footer-bottom py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                @ 2023 copyright all right reserved
                            </div>
                            <div id="social-icons" class="col-md-6 text-primary">
                                <a href="#"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
                crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
                crossorigin="anonymous"></script>

            <script src="./assets/js/bootstrap.js"></script>
            <script src="./assets/js/app.js"></script>
</body>

</html>