<?php
  require_once('controladores/funciones.php');
  require_once('helpers.php');
?>
<nav class="d-flex navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="d-flex flex-grow-1">
      <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>
      <div class="navbar-brand" href="index.php">
          <a href="index.php"><img class="__imglogo" src="img/__logo/op3ok.svg" alt="JCJ tenis profesional"></a>
      </div>
      <div class="w-100 text-right">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar7">
              <span class="navbar-toggler-icon"></span>
          </button>
      </div>
  </div>

  <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar7">
      <ul class="navbar-nav ml-auto flex-nowrap __navbar">
          <li class="nav-item dropdown pr-0">
            <a class="nav-link dropdown-toggle" href="raquetas.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Raquetas
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="raquetas-babolat.php">Babolat</a>
              <a class="dropdown-item" href="raquetas-tecnifibre.php">Tecnifibre</a>
              <a class="dropdown-item" href="raquetas-head.php">Head</a>
              <a class="dropdown-item" href="raquetas.php">Wilson</a>
              <a class="dropdown-item" href="raquetas.php">Yonex</a>
            </div>
          </li>

          <li class="nav-item dropdown pr-0">
            <a class="nav-link dropdown-toggle" href="pelotas.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pelotas
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Head</a>
              <a class="dropdown-item" href="#">Penn</a>
              <a class="dropdown-item" href="#">Wilson</a>
          </li>

          <li class="nav-item dropdown pr-0">
            <a class="nav-link dropdown-toggle" href="cuerdas.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Cuerdas
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="cuerdas.php">Luxilon</a>
            <a class="dropdown-item" href="cuerdas.php">Kirschbaum</a>
            <a class="dropdown-item" href="cuerdas.php">Solinco</a>
          </li>

          <li class="nav-item dropdown pr-0">
            <a class="nav-link dropdown-toggle" href="bolsos.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Bolsos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="bolsos-babolat.php">Babolat</a>
            <a class="dropdown-item" href="bolsos.php">Head</a>
            <a class="dropdown-item" href="bolsos.php">Tecnifibre</a>
            <a class="dropdown-item" href="bolsos.php">Wilson</a>
            <a class="dropdown-item" href="bolsos.php">Yonex</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" href="accesorios.php">Accesorios</a>
         </li>

        <div id="products">
        </div>

        <!--Esto lo estoy colocando para controlar que debe aparecer en las opciones del navbar, dependiendo si el usuario está logueado o no-->

        <?php if(!isset($_SESSION["email"])) :?>
          <form class="form-inline my-2 my-lg-0">

            <li class="nav-item o_navitem">
                <a href="login.php" class="nav-link">Ingresar</a>
              </li>
              <li class="nav-item o_navitem">
                <button type="button" class="d-flex btn btn_register"><a href="register.php">Crear cuenta</a></button>
              </li>
              <li class="nav-item o_navitem">
                <a href="carrito.php"><img src="img/shopping-cart-solid.svg" alt="shopping" width="30px"></a>
              </li>
            </form>
        <?php else :?>
              <li class="nav-item o_navitem">
                <button type="button" class="d-flex btn btn_logout"><a href="logout.php">Cerrar sesión</a></button>
              </li>

          <?php endif;?>
      </ul>

  </div>
</nav>
