<?php

$pg = "contacto";

?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Contacto </title>
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto" class="d-flex flex-column h-100">
  <header class="container">

  <?php include_once ("menu.php"); ?>

  </header>
  <main class="container">
    <div class="row">
      <div class="col-12 pt-3 pb-5">
        <h1>Contacto</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-sm-6">
        <p>Te invito a que me mandes un whatsapp</p>
      </div>

      <div class="col-12 col-sm-6">
        <form action="" method="post">
          <div div class="pb-3">
            <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">
          </div>
          <div div class="pb-3">
            <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control">
          </div>
          <div div class="pb-3">
            <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Telefono/Whatsapp" class="form-control">
          </div>
          <div div class="pb-3">
            <textarea name="txtMensaje" id="txtMensaje" class="form-control" placeholder="Escribe aqui tu mensaje"></textarea class="form-control">
        </div>
        <div div class="">
          <button type="submit" id="btnEnviar" name="btnEnviar" class="btn">ENVIAR</button>
        </div>
      </form>
    </div>
  </div>
    </main>
    <footer class="container mt-auto pb-4">

      <div class="btn-whatsapp">
     <a href="https://api.whatsapp.com/send?phone=+541161137796" target="_blank"> <i class="fa-brands fa-whatsapp px-3 pt-3 pb-4 "></i></a>
      </div>
      <div class="row">
        <div class="col-sm-3 col-12">
          <a href="https://github.com/GonzaloIri"target="_blank"><i class="fa-brands fa-github"></i></a>
          <a href="https://www.linkedin.com/in/gonzalo-juli%C3%A1n-irigaray-alvarez-124888153/"target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
      </div>
      <div class="col-3"> <a href="mailto: Julian.Irigaray8@gmail.com"> Julian.Irigaray8@gmail.com</a> </div>
    </div>
    </footer>
    </body>
</html>                                              