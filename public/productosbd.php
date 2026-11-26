<?php
    ini_set('display_errors','1');
    $titulo = "Descubre nuestros bolsos";
    require_once '../plantillas/cabecera.php';
    require __DIR__ .'/../src/funciones.php';
    require __DIR__ . '/../src/bd.php';
    require __DIR__ . '/../src/consultas_bd.php';
    $productos = '';
    $error = '';
    try{
        $bd = conectar();
        $productos = mostrarProductos($bd);
    }catch(PDOException $e){
        $error = "Error al cargar la pagina: " . $e;
    }
    // $productos = '';
    // print_r($productos);
?>
<body>
    <header class="filter-galery">
        <article>
                <button class="formats"><i class="fa-solid fa-align-justify"></i></button>
                <button class="formats"><i class="fa-solid fa-table-cells-large"></i></button>
                <button class="formats"><i class="fa-solid fa-table-cells"></i></button>
                
            </article>
            <h2>Bolsos</h2>
            <section>
                <select name="filter-articles" id="farticles">
                    <option value="Bolsos">Bolsos</option>
                    <option value="Accesorios">Accesorios</option>
                </select>
                <select name="order-articles" id="order">
                    <option value="price">Precio</option>
                    <option value="new ">Novedades</option>
                    <option value="relevant">Relevancia</option>
                    <option value="alfabetico">A-Z</option>
                </select>
            </section>
    </header>

    <main class="products-galery" id="galery">
        <?php if($error !== ''): ?>
            <p><?= $error ?></p>
        <?php endif; ?>
        <?php if($productos === ''): ?>
            <p>No hay productos que mostrar</p>
        <?php else: ?>
        <?php foreach($productos as $producto): ?>
            <article class="producto">
                <a href="articulo.php?id=<?= h($producto['id'])?>">
                    <img src="<?= $producto['img'] ?>" alt="foto producto <?= h($producto['titulo']) ?>">
                    <p><?= h($producto['titulo']) ?></p>
                    <p><?= h($producto['precio']) ?> €</p>
                </a>
                <button><i class="fa-solid fa-plus"></i></button>
            </article>
        <?php endforeach; ?>
        <?php endif; ?>
    </main>
</body>
</html>
<?php
    require_once '../plantillas/footer.php';
?>