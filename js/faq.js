$(document).ready(function(){

    function deplegarBotonesFaq(i){
        var pregunta = $('#_bf_botonFaq-color'+i);
        // eval("pregunta"+i+"="+pregunta);

        var respuesta = $('#_bf_botonFaq-texto'+i);
        // eval("respueta"+i+"="+respuesta);

        var flechaAbajo = $('#_bf_botonFaq-flechaAbajo'+i);
        // eval("flechaAbajo"+i+"="+flechaAbajo);

        var flechaArriba = $('#_bf_botonFaq-flechaArriba'+i);
        // eval("flechaArriba"+i+"="+flechaArriba);

        pregunta.on('click',function(){
            respuesta.toggleClass('_bf_displayNone');
            flechaAbajo.toggleClass('_bf_displayNone');
            flechaArriba.toggleClass('_bf_displayNone');
        });



        // var pregunta1 = $('#_bf_botonFaq-color1');
        // var respuesta1 = $('#_bf_botonFaq-texto1');
        // var flechaAbajo1 = $('#_bf_botonFaq-flechaAbajo1');
        // var flechaArriba1 = $('#_bf_botonFaq-flechaArriba1');

        // pregunta1.on('click',function(){
        //     respuesta1.toggleClass('_bf_displayNone');
        //     flechaAbajo1.toggleClass('_bf_displayNone');
        //     flechaArriba1.toggleClass('_bf_displayNone');
        // });
    };




    for (var i = 1; i <= 5; i++) {
        deplegarBotonesFaq(i);
    }






});