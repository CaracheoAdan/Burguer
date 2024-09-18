<?php
    $hamburguesas=array();
    $mbd = new PDO('mysql:host=localhost;dbname=burger', "burger", "123");
    $gsent = $mbd->prepare("SELECT id,descripcion,precio,nombre,precio,imagen FROM hamburguesa");
    $gsent->execute();
    $hamburguesas = $gsent->fetchALL(PDO::FETCH_ASSOC);
    
     
    /*echo "<pre>";
    print_r($hamburguesas);
    foreach($hamburguesas as $hamburguesa){
      echo($hamburguesa['nombre']);
    }
    die();*/
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <title>Burger Lince</title>
</head>

<body>
  <div>
    <div class="container-fluid">
      <header>
        <div class="row">
          <div class="col-md-4">
            <img src="images/hambur.png" width="50px" height="">
          </div>
          <div class="col-md-6">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
              <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="quienes.php">Quienes Somos?</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="sucursales.php">Sucursales</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                  </ul> 
                </div>
              </div>
            </nav>
          </div>
          <div class="col-md-2"> Perfil</div>
        </div>
        <div class="row">
          <div class="col">
            <img class="img-fluid" src="images/encabezado.jpg">
          </div>
        </div>
      </header>
      <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="promociones.php">Promociones</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="menu.php" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Menu
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="menu.php">Hamburguesas</a></li>
                  <li><a class="dropdown-item" href="ensaladas.php">Ensaladas</a></li>
                  <li><a class="dropdown-item" href="bebidas.hmtl">Bebidas</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="paquetes.php">Paquetes</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Busca tu producto" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <main>
        <section>
          <div class="row">
            <div class="col-md-8">
              Promocion 1
            </div>
            <div class="col-md-4">
              Paquetes
            </div>
          </div>
        </section>
        <section>
          <div class="row">
            <?php 
                foreach($hamburguesas as $hamburguesa):
              ?>
            <div class="col-md-3">
              <div class="card" style="width: auto;">
               <img src="<?php echo($hamburguesa['imagen']); ?>" class="card-img-top" alt="Hamburguesa con papas" width="200" height="200">
                <div class="card-body">
                  <h5 class="card-title"><?php echo($hamburguesa['nombre']);  ?></h5>
                  <p class="card-text"><?php echo($hamburguesa['descripcion']); ?></p>
                </div>
              </div>
            </div>
          <?php
              endforeach;
            ?>
          </div>
          </div>
    </div>
    </section>

    </main>
    <footer>
      <div class="row">
        <div class="col-md-6">Menu inferior 1</div>
        <div class="col-md-6">Datos de la empresa</div>
      </div>
    </footer>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>