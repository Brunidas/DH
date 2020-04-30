<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Date;
use Illuminate\Support\Carbon;

class DatesController extends Controller
{
    

    public function listado(){

        $fechas = Date::all();
        
        $vac = compact( "fechas");
            
        return view("fechas", $vac);

    }


    public function agregarDias(){
        // catidad maxima de fecha que se podrias ingresar
        $X = 20;


        // obtengo todos los datos de la tabla
        $fechas = Date::all();
        
        if ($fechas->isEmpty() ){
            // si no hay dias dias guardados

            $nuevoDia = Carbon::now();
            
            echo "$nuevoDia" . "<br>";

            for ($i=0; $i < $X; $i++) { 
                // si esl dia es sabado o domingo no lo agregar
                $esDomingo = $nuevoDia->isSaturday();
                $esSabado = $nuevoDia->isSunday();

                if ( $esDomingo==False && $esSabado==False ){

                    $fechaParaAgregar = new Date();
    
                    $fechaParaAgregar->date = $nuevoDia->format('Y-m-d');
                    
                    $fechaParaAgregar->save();
                }


                $nuevoDia->addDay();

            }


        }else{
            
            // traigo el ultima dia 
            $ultimaFecha = $fechas->last();

            // lo guardo en una variable para mayor comodidad
            $string = $ultimaFecha->date;
            
            // separo año, mes dia
            $year = substr( $string, 0, 4 );
            $month = substr( $string, 5, 2 );
            $day = substr( $string, 8, 2 );

            //  creo el objeto carbon de ese ultimo dia
            $nuevoDia =  Carbon::createFromDate($year, $month, $day);
            
            // agregar X dias
            for ($i=0; $i < $X; $i++) { 
                $nuevoDia->addDay();

                $esDomingo = $nuevoDia->isSaturday();
                $esSabado = $nuevoDia->isSunday();

                // si esl dia es sabado o domingo no lo agregar
                if ( $esDomingo==False && $esSabado==False ){

                    $fechaParaAgregar = new Date();
    
                    $fechaParaAgregar->date = $nuevoDia->format('Y-m-d');
                    
                    $fechaParaAgregar->save();
                }

            }

        }


        
        return redirect("/fechas");



        // echo "Lunes? " . $hoy->isMonday() . "<br>";
        // echo "Martes? " . $hoy->isTuesday() . "<br>";
        // echo "Miercoles? " . $hoy->isWednesday() . "<br>";
        // echo "Jueves? " . $hoy->isThursday() . "<br>";
        // echo "Viernes? " . $hoy->isFriday() . "<br>";
        // echo "Sabado? " . $hoy->isSaturday() . "<br>";
        // echo "Domingo? " . $hoy->isSunday() . "<br>";
    }


}
