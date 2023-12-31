<?php

$pg = "sobre-mi";

?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Sobre mi </title>
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi" class="d-flex flex-column h-100">
  <header class="container">
  <?php include_once ("menu.php"); ?>
  </header>
  <main>
    <section class="container" id="descripcion">
      <div class="row mb-5">
        <div class="col-12 col-sm-7">
          <h1 class="pb-5 pt-5">Sobre mi</h1>
          <p>Apasionado por la tecnologia y gestion de proyectos</p>
          <div class="mt-5">
            <a href="contacto.php" class="btn btn-rojo "> Enviar Mensaje</a>
          </div>
        </div>
        <div class="col-10 col-sm-3 py-5 pe-5 d-none d-sm-block">
          <img src="images/GonzaloIri.jpg" alt="Gonzalo Irigaray" id="fotoPerfil">
        </div>
      </div>
    </section>
    <section>  
      <section id="stack">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2 class="py-4 mb-4">
                Stack Tencnologico
              </h2>
            </div>
            <div class="col-6 col-sm-2 ">
              <div class="tecnologia mb-4">
                <h3 class="pt-5 pb-1">C#</h3>
                <i class="fa-solid fa-hashtag pb-5"></i>
              </div>
            </div>
            <div class="col-6 col-sm-2 ">
              <div class="tecnologia mb-4">
                <h3 class="pt-5 pb-1">.NET</h3>
                <i class="fa-solid fa-code pb-5"></i>
              </div>
            </div>
            <div class="col-6 col-sm-2 ">
              <div class="tecnologia mb-4">
                <h3 class="pt-5 pb-1">Python</h3>
                <i class="fa-brands fa-python pb-5"></i>
              </div>
            </div>
            <div class="col-6 col-sm-2 ">
              <div class="tecnologia mb-4">
                <h3 class="pt-5 pb-1">HTML</h3>
                <i class="fa-brands fa-html5 pb-5"></i>
              </div>
            </div>
            <div class="col-6 col-sm-2 ">
              <div class="tecnologia mb-4">
                <h3 class="pt-5 pb-1">CSS</h3>
                <i class="fa-brands fa-css3-alt pb-5"></i>
              </div>
            </div>
            <div class="col-6 col-sm-2 ">
              <div class="tecnologia mb-4">
                <h3 class="pt-5 pb-1">Bootstrap</h3>
                <i class="fa-brands fa-bootstrap pb-5"></i>
              </div>
            </div>
            <div class="col-6 col-sm-2 ">
              <div class="tecnologia mb-4">
                <h3 class="pt-5 pb-1">PHP</h3>
                <i class="fa-brands fa-php pb-5"></i>
              </div>
            </div>
            <div class="col-6 col-sm-2 ">
              <div class="tecnologia mb-4">
                <h3 class="pt-5 pb-1">Linux</h3>
                <i class="fa-brands fa-linux pb-5"></i>
              </div>
            </div>
            <div class="col-6 col-sm-2 ">
              <div class="tecnologia mb-4">
                <h3 class="pt-5 pb-1">SQL Server</h3>
                <i class="fa-solid fa-database pb-5"></i>
              </div>
            </div>
      </section>
     <section id="experiencia" class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="pt-5 pb-4">Experiencia Laboral</h2>
        </div>
      </div>
      <div class="row shadow">
        <div class="col-sm-2 d-none d-sm-block p-5">
          <img src="images/Chamba/m3f.jpeg" alt="Coppel" class="img-fluid gris">
        </div>
        <div class="col-sm-10 mt-4">
          <h3>
            Administrativo
          </h3>
          <h4>MOTORES 3 DE FEBRERO</h4>
          <h5>dic 2022 - Actualidad </h5>
          <p>Realizar el registro contable de facturas, nóminas, operaciones de cobro y pagos.
            Gestionar los cobros y pagos, emisión de efectos comerciales de pago. Manejo de office, Software  </p>
        </div>
        <div class="col-sm-2 d-none d-sm-block p-5">
          <img src="images/Chamba/sin-logo.png" alt="Coppel" class="img-fluid gris">
        </div>
        <div class="col-sm-10 mt-4">
          <h3>
            PROGRAMADOR 
          </h3>
          <h4>FREELANCE</h4>
          <h5>Nov 2022 </h5>
          <p>APLICACION
            DESARROLLADA CON .NET FRAMEWORK, CONECTADO A BASE DE DATOS SQL SERVER, CONTROL DE STOCK. </p>
        </div>
        <div class="col-sm-2 d-none d-sm-block p-5">
          <img src="images/chamba/3sols.jpg" alt="3Sols" class="img-fluid gris">
        </div>
        <div class="col-sm-10 mt-4">
          <h3>
            ATENCIÓN AL PUBLICO
          </h3>
          <h4>3Sols</h4>
          <h5>sep 2021 - dic 2022</h5>
          <p>
            Atención al publico, Repositor, Manejo de Software, Manejo de Office.
          </p>
        </div>

        <div class="col-sm-2 d-none d-sm-block p-5">
          <img src="images/Chamba/coppel.webp" alt="Coppel" class="img-fluid gris">
        </div>
        <div class="col-sm-10 mt-4">
          <h3>
            ASESOR DE VENTAS
          </h3>
          <h4>Coppel</h4>
          <h5>dic 2019 - mar 2020 </h5>
          <p>ATENCIÓN AL PUBLICO, REPOSITOR</p>
        </div>


      </div>
      
     </section>
  </main>
  <footer class="container mt-auto pb-4">

    <div class="btn-whatsapp">
      <a href="https://api.whatsapp.com/send?phone=+541161137796" target="_blank"> <i
          class="fa-brands fa-whatsapp px-3 pt-3 pb-4 "></i></a>
    </div>
    <div class="row">
      <div class="col-sm-3 col-12">
        <a href="https://github.com/GonzaloIri" target="_blank"><i class="fa-brands fa-github"></i></a>
        <a href="https://www.linkedin.com/in/gonzalo-juli%C3%A1n-irigaray-alvarez-124888153/" target="_blank"><i
            class="fa-brands fa-linkedin-in"></i></a>
      </div>
      <div class="col-3">Sponsor</div>

      <div class="col-3"> <a href="mailto: Julian.Irigaray8@gmail.com"> Julian.Irigaray8@gmail.com</a> </div>
    </div>
  </footer>
</body>

</html>