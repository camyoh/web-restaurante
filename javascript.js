var fecha = new Date();
var textoAbierto = document.getElementsByClassName('estado');
var textoHorario = document.getElementsByClassName('tiempo-falta');

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
}
horario(fecha);
