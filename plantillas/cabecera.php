   
 <!DOCTYPE html>
   <html lang="es">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo?></title>
    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="stylesheet" href="/css/estilos2.css">
    <link rel="stylesheet" href="/css/estilos3.css">
    <link rel="stylesheet" href="/css/estilosProducto.css">
    <script src="https://kit.fontawesome.com/05fd8cfb59.js" crossorigin="anonymous"></script>
    <script type="module" src="script/buscador.js" defer></script>
    <script type="module" src="script/menu.js" defer></script>

   </head>
   <body>
    <div class="main-navigation">
        <button class='menu-sandwidch' id="menu"><i class="fa-solid fa-bars" style="color: #FFF5EB;"></i></button>
        <nav class="nav-menu">
            <a href="productos.php">bolsos</a>
            <a href="productos.php">accesorios</a>
            <a href="#">colecciones</a>
            <a href="index.php" class="logo"><img src="img/logoPequeño.svg" alt="logoWeb" width="60px"/></a>
            <a href="#">sobre nosotros</a>
            <a href="contacto.php">contacto</a>
        </nav>
        <div class="nav-actions">
            <button id='search-button'><i class="fa-solid fa-magnifying-glass fa-xl" style="color: #FFF5EB;"></i></button>
            <a href="#"><i class="fa-solid fa-bag-shopping fa-xl" style="color: #FFF5EB;"></i></a>
        </div>
    </div>
    <section class='buscador-desplegable' id="desplegable">
        <button id='cerrar-ventana'>close</button>
        <form id='buscador'>
            <input type="text" name='buscar' placeholder="Buscar articulos...">
        </form>
        <article id='elementos'></article>
    </section>