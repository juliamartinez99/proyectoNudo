<?php 
    ini_set('display_errors','1');
    require __DIR__ . '/../src/bd.php';
    require __DIR__ . '/../src/consultas_bd.php';

    $id = $_GET['id'];
    $error = '';
    $producto = [];
    $id = filter_var($id,FILTER_VALIDATE_INT);
    if($id === false){
        $error = "el parametro debe ser un numero";
    }else{
        try{

            $bd = conectar();
            $producto = producto_por_id($bd,$id);
            
            if($producto === null){
                $error = "El producto solicitado no existe";
            }else{
                $titulo = 'DESCUBRE ' . $producto['titulo'];
                $caracteristicas = json_decode($producto['caracteristicas']);
            }
        }catch(PDOException $e){

            $error = "Error al ejecutar la consulta";
        }
    }

    // print_r($producto);
    // print_r($producto['caracteristicas']);


    require_once '../plantillas/cabecera.php';
?>
<body>
<?php if($error === ''): ?>
 <section class="product-details-main">
        <article class="main-img">
            <img src="<?= $producto['img']?>" alt="">
            <section class="mini-img">
                <?php for($i = 0; $i < 4; $i++): ?>
                    <img src="<?= $producto['img']?>" alt="">
                <?php endfor; ?>
            </section>
        </article>
        <aside class="details-aside">
            <div class="title-details">
                <h3><?= $producto['titulo'] ?></h3>
                <h4><?= $producto['marca'] ?></h4>
                <p><?= $producto['precio'] ?> €</p>
            </div>
            <div class="cantidad-buttons">
                <button><i class="fa-solid fa-minus"></i></button>
                <p>1</p>
                <button><i class="fa-solid fa-plus"></i></button>
            </div>
            <button class="buy-button">COMPRAR</button>
            <div class="products-details">
                <h4>DETALLES</h4>
                <p><?= $producto['descripcion'] ?></p>
                <h4>CARACTERISTICAS</h4>
                <ul>
                    <?php foreach($caracteristicas as $c): ?>
                        <li><?= $c ?></li>
                    <?php endforeach; ?>
                </ul>
                <h4>COMPOSICION</h4>
                <p>100% Algodón</p>
            </div>
        </aside>
    </section>
    <section class="sugest-products">
        <h2>PRODUCTOS DESTACADOS</h2>
        <div class="block-products">
            <article class="article">
                <img src="img/productos/producto1.jpg" alt="imagen producto destacado">
                <p>BOLSO CLASIC</p>
                <p>49,99 €</p>
            </article>
            <article class="article">
                <img src="img/productos/producto1.jpg" alt="imagen producto destacado">
                <p>BOLSO CLASIC</p>
                <p>49,99 €</p>
            </article>
            <article class="article">
                <img src="img/productos/producto1.jpg" alt="imagen producto destacado">
                <p>BOLSO CLASIC</p>
                <p>49,99 €</p>
            </article>
            <article class="article">
                <img src="img/productos/producto1.jpg" alt="imagen producto destacado">
                <p>BOLSO CLASIC</p>
                <p>49,99 €</p>
            </article>
        </div>
    </section>
    <?php else: ?>
        <p><?=$error?></p>
    <?php endif; ?>
</body>
<?php
    require_once '../plantillas/footer.php';
?>