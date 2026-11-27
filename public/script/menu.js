const elementos = document.querySelectorAll(".nav-menu a:not(.logo)")
let abierto = false;
document.getElementById("menu").addEventListener("click",(e)=>{
    // console.log("elemento")
    if(abierto){
        for (const elemento of elementos) {
            // console.log(elemento);
            elemento.style.display = 'none'
        }  
        abierto = false;
    }else{
        for (const elemento of elementos) {
            // console.log(elemento);
            elemento.style.display = 'block'
        }  
        abierto = true;
    }

    
})