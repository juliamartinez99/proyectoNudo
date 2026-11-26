<?php
    declare(strictypes=1);
    ini_set('display_errors','1');
    $titulo = "Contacta con nosotros | NUDO";
    require_once '../plantillas/cabecera.php';
    // echo $_SERVER['REQUEST_METHOD'];
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $datos = ['nombre' => $_POST['name'], 'apellidos' => $_POST['surname'], 'email' => $_POST['email'], 'mensaje' => $_POST['message']];
        require __DIR__ . '/../src/comprobar.php';
        // print_r($datos);
        [$datos_c,$errores] = comprobar_datos($datos);
        if($errores){
            http_response_code(422);
            foreach($errores as $clave => $valor){
                echo 'Error en ' . $clave . ' => ' . $valor;
            }
        }else{
            header('Location: contacto.php', true, 303); // redirecciona la pagina si todos los datos están correctos
            exit; //sale
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <script src="https://kit.fontawesome.com/05fd8cfb59.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/estilosFormulario.css">
</head>
<body>
    <header>
        <h1 class="title">Contacta con nosotros</h1>
    </header>
    <main class="main-content-form">
        <form class="contact-form style-section" method='post'>
            <h3>Formulario de contacto</h3>
            
            <label for="name" method="post" action="/contacto.php"></label>
            <input type="text" name="name" id="name" placeholder="Nombre" value=<?= $datos['nombre'] ?? ''?>>

            <label for="surname"></label>
            <input type="text" name="surname" id="surname" placeholder="Apellidos" value=<?= $datos['apellidos'] ?? ''?>>

            <label for="email"></label>
            <input type="email" name="email" id="email" placeholder="Correo electrónico" value=<?= $datos['email'] ?? ''?>>

            <label for="message-form"></label>
            <textarea name="message" id="message-form" placeholder="Mensaje"></textarea>

            <input type="submit" value="Enviar">
        </form>
        <section class="style-section contact-info">
            <a href="https://wa.me"><i class="fa-brands fa-whatsapp"></i> 657 331 117</a>
            <a href="tel:+34981820247"><i class="fa-solid fa-phone"></i> 981 82 02 47</a>
            <a href="mailto:info@nudo.com"><i class="fa-regular fa-envelope"></i> info@nudo.com</a>
            <a href="https://www.google.com/maps/search/?api=1&query=Calle+Real+10+A+Coruña"
            target="_blank"> <i class="fa-solid fa-map-pin"></i>
                Calle Real 10, A Coruña
            </a>
        </section>
    </main>
</body>
</html>
<?php
    require_once '../plantillas/footer.php';
?>