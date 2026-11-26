const galeria = document.getElementById("galery")
const URL = '/script/datos.json'
// const datos = require('datos.json');
cogerDatos()
async function cogerDatos(){

    try{
        const respuesta = await fetch(URL)
        if(respuesta.ok){
            const datos = await respuesta.json()
            mostrarDatos(datos)
        }else{
            if(respuesta.status === 404){
                console.log("no existe archivo")
            }else{
                console.log("otro error")
            }
        }
    }catch(error){
        console.log("ha habido un error inesperado")
        console.log(error)
        galeria.innerText = "Hay un error inesperado, abreme con LIVE SERVER"
    }
}

function mostrarDatos(datos){

    for(let dato of datos){
        const articulo = document.createElement("article")
        articulo.classList = "producto"
        const enlace = document.createElement('a')
        enlace.href = "#"
        const imagen = document.createElement("img")
        imagen.src = dato.imagen
        imagen.alt = 'Imagen de ' + dato.nombre
        const nombre = document.createElement("p")
        nombre.innerText = dato.nombre
        const precio = document.createElement("p")
        precio.innerText = dato.precio + " €"
        const boton = document.createElement("button")
        const icono = document.createElement('i')
        icono.classList = 'fa-solid fa-plus'
        boton.append(icono)
        enlace.append(imagen,nombre,precio)
        articulo.append(enlace,boton)
        galeria.appendChild(articulo)
    }

}