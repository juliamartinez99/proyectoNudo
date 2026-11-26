<?php
    $titulo = "NUDO BOLSOS";
    require_once '../plantillas/cabecera.php';
?>
    <header class="main-header">
        <img src="img/portada/portada2.jpg" alt="portada" width="100%">
        <a id='main-button' href="productos.php">Descubre nuestra colección</a>
    </header>
<main class="main">
        <section class="text-section">
            <div class="text-section-item">
                <p>envios a toda la peninsula</p>
                <p>Recibe tus productos artesanales estés donde estés. Preparamos cada pedido con cuidado para que llegue a tu puerta.</p>
            </div>
            <div class="text-section-item">
                <p>hecho a mano</p>
                <p>Cada pieza está elaborada artesanalmente, cuidando  cada detalle para crear accesorios únicos y especiales.</p>
            </div>
            <div class="text-section-item">
                <p>diseños únicos</p>
                <p>Piezas originales creadas para darle un toque diferente a tus looks y acompañarte en cada ocasión.</p>
            </div>
        </section>
        <section class="category-section">
            <a href="productos.php" class="category-section-item">
                <img src="img/portada/categoria-bolsos.png" alt="fotografia bolso en grande">
                <p>bolsos</p>
            </a>            
            <a href="productos.php" class="category-section-item">
                <img src="img/portada/categoria-accesorios.png" alt="fotografia categoria accesorios">
                <p>accesorios</p>
            </a>
        </section>
    </main>

<?php
    require_once '../plantillas/footer.php';
?>