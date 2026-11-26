<?php

/**
 * Funcion que le pasas un array y una clave del array y comprueba si es valido, si es un string
 */
function leer_texto(array $texto, String $nombre):String{

    $valor = $texto[$nombre] ?? '';
    if(!is_string($texto[$nombre])){
        return '';
    }
    return $valor;
}

function comprobar_datos(array $datos): array{

    $datos_validos = [];
    $errores = [];

    $datos_validos['nombre'] = leer_texto($datos,'nombre');
    if($datos_validos['nombre'] === ''){
        $errores['nombre'] = 'El nombre está vacio';

        // comprobamos que el nombre no tenga demasiados caracgteres
    }elseif(mb_strlen($datos_validos['nombre']) > 50){
        
        $errores['nombre'] = 'nombre con demasiados caracteres, maximo 50';
    }

    $datos_validos['apellidos'] = leer_texto($datos, 'apellidos');
    if($datos_validos['apellidos'] === ''){
        $errores['apellidos'] = 'El apellido no puede estar vacio';
    }

    $datos_validos['mensaje'] = leer_texto($datos,'mensaje');
    if($datos_validos['mensaje'] === ''){

        $errores['mensaje'] = 'No hay mensaje';

    }
    return [$datos_validos,$errores];
}

?>