<?php

$pg = "inicio";

?>

<!DOCTYPE html>
<html lang="es" class="h-100">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" />
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/estilos.css" />
  </head>

  <body id="inicio" class="d-flex flex-column h-100">
    <header class="container">
     <?php include_once ("menu.php"); ?>
    </header>
    <main class="container">
      <div class="row">
        <div class="col-12 mt-4 text-center cohete">
          <img src="images/cohete.svg" alt="cohete" />
        </div>
      </div>
      <div class="col-12 col-sm-6 offset-sm-3 text-center">
        <div class="my-4">
          <p class="px-5 py-2">
            Bienvenid@ a mi sitio web sobre desarrollo de sistema.
          </p>
        </div>
      </div>
      <div class="col-12 text-center pt-3 pb-5">
        <a href="proyectos.php" class="btn btn-blanco shadow">
          Conoce mis Proyectos
        </a>
      </div>
    </main>
    <footer class="container mt-auto py-4"> <!--cambie aca--->
      <div class="btn-whatsapp">
        <a
          href="https://api.whatsapp.com/send?phone=+541161137796"
          target="_blank"
        >
          <i class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i
        ></a>
      </div>
      <div class="row">
        <div class="col-sm-3 col-12">
          <a href="https://github.com/GonzaloIri" target="_blank"
            ><i class="fa-brands fa-github"></i
          ></a>
          <a
            href="https://www.linkedin.com/in/gonzalo-juli%C3%A1n-irigaray-alvarez-124888153/"
            target="_blank"
            ><i class="fa-brands fa-linkedin-in"></i
          ></a>
        </div>
        <div class="col-3">
          <a href="mailto: Julian.Irigaray8@gmail.com">
            Julian.Irigaray8@gmail.com</a
          >
        </div>
      </div>
    </footer>
  </body>
</html>
