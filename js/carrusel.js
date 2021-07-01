
/*------------------------Slider automático---------------------------*/
var promo_index = 0;

function show_promos(){
    var i;
    var slides = document.getElementsByClassName('promos');
    for(i=0 ; i<slides.length ; i++){
        slides[i].style.display = "none";
    }
    promo_index++;

    if(promo_index > slides.length){
        promo_index = 1;
    }
    slides[promo_index-1].style.display = "block";
    setTimeout(show_promos, 4000);
}
show_promos();

/*---------------------------------------cuerpo----------------------------------------- */


const nove = document.querySelector('.contenedor-carrusel-nove'),
flecha_iz_nove = document.getElementById('flecha-izquierda-nove'),
flecha_der_nove = document.getElementById('flecha-derecha-nove');

/*------------------------flecha derecha novedades----------------------------*/

flecha_der_nove.addEventListener('click', () => {
    nove.scrollLeft += nove.offsetWidth;
});

/*-------------------------flecha izquierda novedades-----------------------------*/

flecha_iz_nove.addEventListener('click', () =>{
   nove.scrollLeft -= nove.offsetWidth;
});

const reco = document.querySelector('.contenedor-carrusel-reco'),
flecha_iz_reco = document.getElementById('flecha-izquierda-reco'),
flecha_der_reco = document.getElementById('flecha-derecha-reco');

/*------------------------flecha derecha novedades----------------------------*/

flecha_der_reco.addEventListener('click', () => {
    reco.scrollLeft += reco.offsetWidth;
});

/*-------------------------flecha izquierda novedades-----------------------------*/

flecha_iz_reco.addEventListener('click', () =>{
   reco.scrollLeft -= reco.offsetWidth;
});