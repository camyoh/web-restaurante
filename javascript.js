var fecha = new Date();
var textoAbierto = document.getElementsByClassName('estado');
var textoHorario = document.getElementsByClassName('tiempo-falta');
var tituloDia = document.getElementsByClassName('tituloDia');

function horario(fecha) {
    var hora = fecha.getHours();
    console.log(hora);
    if ((hora >= 11 && hora < 15) || (hora >= 17 && hora < 21)) {
        textoAbierto[0].textContent = "abierto";
        if ((hora >= 11 && hora < 15))
            textoHorario[0].textContent = "Cierra a las 3 P.M. hoy.";
        if ((hora >= 17 && hora < 21))
            textoHorario[0].textContent = "Cierra a las 9 P.M. hoy.";
    } else {
        textoAbierto[0].textContent = "cerrado";
        if (hora >= 21 || hora < 0)
            textoHorario[0].textContent = "Abre a las 11 A.M. mañana.";
        if (hora >= 0 && hora < 11)
            textoHorario[0].textContent = "Abre a las 11 A.M. hoy.";
        if (hora >= 15 && hora < 17)
            textoHorario[0].textContent = "Abre a las 5 P.M. hoy.";
    }
    var dia = fecha.getDay();
    var caja = document.getElementsByClassName("imgDelDia");
    switch (dia) {
        case 1:
            dia = "Lunes";
            caja[0].style.backgroundImage = 'url(images/lunes.jpg)';
            break;
        case 2:
            dia = "Martes";
            caja[0].style.backgroundImage = 'url(images/martes.jpg)';
            break;
        case 3:
            dia = "Miércoles";
            caja[0].style.backgroundImage = 'url(images/miercoles.jpg)';
            break;
        case 4:
            dia = "Jueves";
            caja[0].style.backgroundImage = 'url(images/jueves.jpg)';
            break;
        case 5:
            dia = "Viernes";
            caja[0].style.backgroundImage = 'url(images/viernes.jpg)';
            break;
        case 6:
            dia = "Sábado";
            caja[0].style.backgroundImage = 'url(images/sabado.jpg)';
            break;
        case 7:
            dia = "Domingo";
            caja[0].style.backgroundImage = 'url(images/domingo.jpg)';
            break;
        default:
            break;
    }
    tituloDia[0].textContent = "Hoy es " + dia + " de ";
    console.log(dia);
}
horario(fecha);

//var caja2 = document.getElementsByClassName('cajagal2');
//$(document).ready(function () {

$(window).scroll(function () {
    var wScroll = $(this).scrollTop();
    $('.logo').css('transform', 'translate(0px,' + wScroll / 2 + '%)');
    $('.detraslogo').css('transform', 'translate(0px,' + wScroll / 2.5 + '%)');
    console.log("hi");
});
var x = window.matchMedia("(max-width: 950px)");

function myFunction(x) {
    if (x.matches) { // If media query matches
        $(".cajagal2").hide();
    } else {
        $(".cajagal2").show();
    }
}
myFunction(x);
//x.addListener(myFunction);
//$(".cajagal2").hide();
var num = 0;
$(".vermasmenos").on("click", function () {
    //    $(".cajagal2").style.height = "1000px";
    $(".cajagal2").slideToggle();
    if (num == 0) {
        $(".imagen").attr("src", "images/Botonmenos.png");
        num = 1;
    } else {
        $(".imagen").attr("src", "images/Botonmas.png");
        num = 0;
    }
})
//})