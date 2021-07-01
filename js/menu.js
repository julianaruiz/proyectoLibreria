const enlace = document.querySelector('.contendor-menu-secuandario .menu-secundario'),
      btnUsuario = document.getElementById('btn-usuario-secu'),
      usuario = document.getElementById('usuario-secu');

btnUsuario.addEventListener('click', (e) => {
    e.preventDefault();
    if(usuario.classList.contains('activo')){
        usuario.classList.remove('activo');
    }
    else{
        usuario.classList.add('activo');
    }
})

document.querySelector('#boton-barras-secu').addEventListener('click', (e) =>{
    e.preventDefault();
    if(enlace.classList.contains('activo')){ //saber si tiene una clase llamada activo
        enlace.classList.remove('activo'); //quitarle la clase activo a el contenedor de enlaces
        document.querySelector('body').style.overflow ='visible'; //pone visible la barra de navegación
    }
    else{//agregarle la clase activo a el contenedor de enlaces
        enlace.classList.add('activo');
        document.querySelector('body').style.overflow='hidden'; //esconde la barra de navegación
    }
});