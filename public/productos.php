<?php
    ini_set('display_errors','1');
    $titulo = "Descubre nuestros bolsos";
    require_once '../plantillas/cabecera.php';
?>
<head>
    <script src="/script/scriptAnhadirProd.js" defer></script>
</head>
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

    <main class="products-galery" id="galery"></main>
</body>
</html>
<?php
    require_once '../plantillas/footer.php';
?>