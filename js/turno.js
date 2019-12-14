$(document).ready(function(){
    
    
    
    // var popUpTurnos = $('.popUpTurnos');

    // popUpTurnos.on('click',function(){

    //     var idBotonEspecialidad = $(this).attr('id');
    //     alert("El id de este boton en "+ idBotonEspecialidad );

    // });


    var especialidadSeleccionada = $('#especialidadSeleccionada');
    especialidadSeleccionada.on('click',function(){
        // alert("Se cancelo el turno");
    });  


    var fecha = $('#datepicker');
    fecha.datepicker();



    
});