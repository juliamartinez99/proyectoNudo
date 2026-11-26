const botonCerrar = document.getElementById("cerrar-ventana");
const botonBuscar = document.getElementById("search-button");
const buscadorDesplegable = document.getElementById("desplegable")
const articulos = document.getElementById("elementos")
// let abierto = false;
const datos = await cogerdatos();
botonCerrar.addEventListener("click", (e) =>{
    // abierto = false;
    buscadorDesplegable.style.display = 'none'

})

botonBuscar.addEventListener("click", (e)=>{
    // abierto = true;
    buscadorDesplegable.style.display = 'block'
})

const input = document.getElementById("buscador");
input.addEventListener("input", (e) => {
    console.log("se ha accionado")
    // console.log(e.target.value)
    let valor = e.target.value.toLowerCase();
    console.log(valor)
    // cogerdatos(valor);
    const elementos = datos.filter(x => x.nombre.toLowerCase().includes(valor))
    articulos.innerHTML = '';
    if(elementos.length === 0){
        articulos.innerText = 'NO HAY NINGUN ELEMENTO QUE COINCIDA CON LA BUSQUEDA'
    }else{
        let i = 1
        elementos.forEach(elemento =>{
            const div = document.createElement("a")
            const img = document.createElement('img')
            const titulo = document.createElement('p')
            const precio = document.createElement('p')
            img.src = elemento.imagen
            titulo.innerText = elemento.nombre
            precio.innerText = elemento.precio + ' €'
            div.href = "articulo.php?id=" + i++;
            div.append(img,titulo,precio)
            articulos.append(div)
        })
    }
}


)

async function cogerdatos(valor){
    const conexion = await fetch('script/datos.json');
    const datos = await conexion.json();
    // const f = datos.filter(x => x.nombre.includes(valor))
    // articulos.innerHTML = ''
    //     f.forEach(elemento =>{
    //         const div = document.createElement("div")
    //         const img = document.createElement('img')
    //         const titulo = document.createElement('p')
    //         const precio = document.createElement('p')
    //         img.src = elemento.img
    //         titulo.innerText = elemento.nombre
    //         precio.innerText = elemento.precio
    //         div.append(img,titulo,precio)
    //         articulos.append(div)
    //     })
    return datos
}