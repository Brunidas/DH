<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cuenta Usuario </title>
</head>
<body>
    
    <h1> {{ "@" }}{{ auth()->user()->user }} </h1>
        

    <form action="/agregarPaciente/{{ auth()->user()->id }}" method="get">
        {{ csrf_field() }}
        <input type="submit" value="Crear Paciente">
    </form>

    <!-- <form action="/cambiarCorreo/{{ auth()->user()->id }}" method="get">
        {{ csrf_field() }}
        <input type="submit" value="Crear Paciente">
    </form> -->



    <div class="">
        
        {{ "Correo: " }}{{ auth()->user()->email }}
        <br>
  
    </div>

    <ul>

        @foreach( $pacientes as $paciente )
            @if( $paciente->user_id == auth()->user()->id )
                <li>                
                    
                    <form action="/editarPaciente/{{ $paciente->id }}" method="get">
                        {{ csrf_field() }}
                        <input type="submit" value="Editar Usuario">
                    </form>
                    
                    @if ( $paciente->account_holder == false )
                        
                        <form action="/borrarPaciente" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value= "{{$paciente->id}}" >
                            <input type="submit" value="Borrar Paciente">
                        </form>
                    
                    @endif 
                    
                    Nombre: {{ $paciente->name}} 
                    <br>
                    Apellido: {{ $paciente->lastname}} 
                    <br>
                    Dni: {{ $paciente->dni }} 
                    <br>
                    Numero de Socio: {{ $paciente->membership_number }} 
                    <br>
                    Direccion: {{ $paciente->adress }} 
                    <br>
                    Provincia: {{ $paciente->province }} 
                    <br>
                    Telefono: {{ $paciente->phone_number }} 
                    <br>
                    Titular de la cuenta: {{ $paciente->account_holder }} 
                    <br>
                    Obra Social : {{ $paciente->medicalInsurance->name }} 

                
                </li>
                <br>
            @endif
        @endforeach
    </ul>


</body>
</html>