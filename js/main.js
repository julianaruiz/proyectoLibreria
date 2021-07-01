const botonPP = document.getElementById('categorias'), /*variable para el botón de todas las categorias */
    grid = document.getElementById('grid'), /*variable del grid */
    btnUsuario = document.getElementById('btn-usuario'),
    usuario = document.getElementById('usuario'), /*variable del menú del usuario */
    botoncerrar = document.getElementById('boton-cerrar'),/*variable del botón cerrar todo */
    subcategorias = document.querySelector('#grid .subcategorias-grid'),/*variable para las subcategorias */
    subcategorias2 = document.querySelector('#grid .subcategorias2-grid'),/*variable para las subcategorias 2 */
    enlace = document.querySelector('#menu .enlaces-categorias'),/*variable para los enlaces principales */
    smartphone = () => window.innerWidth<=800; /*si la ventana es menor o igual a 800px entonces retorna vedadero */

botonPP.addEventListener('mouseover', () => { /*cuando el cursor esté encima del menú principal este tendrá la clase activo */
    if(!smartphone()){
        grid.classList.add('activo');
    }
});

grid.addEventListener('mouseleave', () => { /*cuando el cursor salga de grid se le quitará la clase activo*/
    if(!smartphone()){
        grid.classList.remove('activo');
        
    }
});

btnUsuario.addEventListener('click', (e) =>{
    e.preventDefault();
    if(usuario.classList.contains('activo')){
        usuario.classList.remove('activo');
    }
    else{
        usuario.classList.add('activo');
    }
});

document.querySelectorAll('#menu .categorias-grid a').forEach((elemento) => { //accede a menu y luego a las etiquetas a de la clase categoria
    elemento.addEventListener('mouseenter',(evento) =>{ //cuando el cursor esté encima de la categoria este toma el data-categoria
        if(!smartphone()){
            document.querySelectorAll('#menu .subcategoria').forEach((categoria) => { //obtener subcategorias
                categoria.classList.remove('activo'); //se remueve la clase de activo
                if(categoria.dataset.categoria == evento.target.dataset.categoria){ //si el dataset al elemento que le paso el cursor es el mismo al de una subcategoria le pone activo a esta
                    categoria.classList.add('activo');
                }
            });
        }
        
    });
});

document.querySelectorAll('#menu .subcategorias-grid a').forEach((elemento) => { //accede a menu y luego a las etiquetas a de la clase subcategoria
    elemento.addEventListener('mouseenter',(evento) => {//cuando el cursor esté encima de la subcategoria este toma el data-subcategoria
        if(!smartphone()){
            document.querySelectorAll('#menu .subcategoria2').forEach((subcategoria) => {//obtener subcategorias 2
                subcategoria.classList.remove('activo');//se remueve la clase de activo
                if(subcategoria.dataset.subcategoria == evento.target.dataset.subcategoria){//si el dataset al elemento que le paso el cursor es el mismo al de una subcategoria2 le pone activo a esta
                    subcategoria.classList.add('activo');
                }
            });
        }
    });
});

/*--------------------Dispositivos móviles----------------------*/
//ingresar al menú principal

document.querySelector('#boton-barras').addEventListener('click', (e) =>{
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

//ingresar a las categorias

botonPP.addEventListener('click', (e) => {
    e.preventDefault();
    grid.classList.add('activo');
    botoncerrar.classList.add('activo');
});

//botón de regresar en el menú de categorias

document.querySelector('#grid .categorias-grid .boton-regresar').addEventListener('click', (e) => {
    e.preventDefault();
    grid.classList.remove('activo');
    botoncerrar.classList.remove('activo');
});

//muestra las subcategorias

document.querySelectorAll('#menu .categorias-grid a').forEach((elemento) => { //accede a menu y luego a las etiquetas a de la clase categoria
    elemento.addEventListener('click',(evento) =>{ //cuando se de click en la categoria este toma el data-categoria
        if(smartphone()){
            subcategorias.classList.add('activo');
            document.querySelectorAll('#menu .subcategoria').forEach((categoria) => { //obtener subcategorias
                categoria.classList.remove('activo'); //se remueve la clase de activo
                if(categoria.dataset.categoria == evento.target.dataset.categoria){ //si el dataset al elemento que se le da click es el mismo al de una subcategoria le pone activo a esta
                    categoria.classList.add('activo');
                }
            });
        }
        
    });
});

//boton para regresar al menú de categorías

document.querySelectorAll('#grid .subcategorias-grid .boton-regresar').forEach((boton) =>{
    boton.addEventListener('click', (e) =>{
        e.preventDefault();
        subcategorias.classList.remove('activo');

    });
});

//abrir el submenú del submenú

document.querySelectorAll('#menu .subcategorias-grid a').forEach((elemento) => { //accede a menu y luego a las etiquetas a de la clase subcategorias2
    elemento.addEventListener('click',(evento) =>{ //cuando se de click en la subcategoria este toma el data-subcategoria
        if(smartphone()){
            subcategorias2.classList.add('activo');
            document.querySelectorAll('#menu .subcategoria2').forEach((subcategoria) => { //obtener subcategorias2
                subcategoria.classList.remove('activo'); //se remueve la clase de activo
                if(subcategoria.dataset.subcategoria == evento.target.dataset.subcategoria){ //si el dataset al elemento que se le da click es el mismo al de una subcategoria le pone activo a esta
                    subcategoria.classList.add('activo');
                }
            });
        }
        
    });
});

//botónpara regresar al submenú

document.querySelectorAll('#grid .subcategorias2-grid .boton-regresar').forEach((boton) => {
    boton.addEventListener('click',(e) =>{
        e.preventDefault();
        subcategorias2.classList.remove('activo');
    });
});

//botón para cerrar todo el menú 

botoncerrar.addEventListener('click',(e) =>{
    e.preventDefault();
    document.querySelectorAll('#menu .activo').forEach((elemento) => {
        elemento.classList.remove('activo');
    });
    document.querySelector('body').style.overflow='visible';
});


/*----------------------------------Barra de búsqueda-----------------------*/

const lupa = document.getElementById('icono-buscar'),
      barra = document.getElementById('barra-busqueda'),
      fondo = document.getElementById('cover-search'),
      cuadro_buscar = document.getElementById('busqueda');

//mostrar el buscador


if(!smartphone()){
    lupa.addEventListener('click', () =>{ 
        barra.style.top = "60px";
        fondo.style.display = "block";
        document.querySelector('body').style.overflow='hidden';
        cuadro_buscar.focus();
    });
    fondo.addEventListener('click', () => {
        barra.style.top = "-90px";
        fondo.style.display = "none";
        document.querySelector('body').style.overflow='visible';
    });

}
if(smartphone()){
    lupa.addEventListener('click', () =>{ 
        barra.style.top = "60px";
        fondo.style.display = "block";
        cuadro_buscar.focus();
        botoncerrar.classList.add('activo');
        lupa.style.display = "none";
        botonPP.disabled=true;
        document.querySelector('body').style.overflow='hidden';
    });
    botoncerrar.addEventListener('click', () => {
        barra.style.top = "-120px";
        fondo.style.display = "none";
        lupa.style.display = "none";
        botoncerrar.classList.remove('activo');
        lupa.style.display = "block";
        botonPP.disabled=false;
        document.querySelector('body').style.overflow='visible';
    });

}