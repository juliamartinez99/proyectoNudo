<?php
declare(strict_types=1);
function mostrarProductos (PDO $db):array{
    $consulta = $db->query(
        'SELECT id,titulo, descripcion, img, precio FROM producto ORDER BY id'
    );
    
    return $consulta->fetchAll();
}
function producto_por_id(PDO $bd, int $id):?array{
    $consulta = $bd->prepare(
        'SELECT id, titulo, descripcion, img, caracteristicas, marca, precio from producto where id = ? '
    );
    $consulta->execute([$id]);
    $producto = $consulta->fetch();

    if(!$producto){
        return null;
    }else{
        return $producto;
    }
}