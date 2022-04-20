
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

    <style>
        :root{
    --color-principal:#4774C7;
    --color-secundario: #A9BEE5;
    --color-letra-secundaria: #74747B;
}
*{
   padding: 0;
   margin: 0;
   box-sizing: border-box;
}
small{
    color: red;
    font-size: 12px;
}


.formulario-registro-docente{
    box-sizing: border-box;
    margin: 5% 10%;
    font-family:Roboto ,Arial  ;
}
.titulo-formulario{
    color: var(--color-principal);

}
.contenedor-columnas{
    display: grid;
    grid-template-columns: 1fr 1fr;
}
.columna{
    padding: 10px;
}

/* ------------------------------------- */
/* Inputs y labels del formulario */
/* ------------------------------------- */
.formulario-registro-docente label{
    color:var(--color-letra-secundaria) ;

}
.input{
    border: none;
    border: 1px solid var(--color-letra-secundaria);
    height: 30px;
    width: 80%;
    border-radius: 16px;
    margin: 9px;
    padding: 3px 10px;
    outline: none;
}
.input-contrasena{
    width: 50%;
}


/* ---------------------------------------- */
/* Contendor de los Checkbox */
/* ---------------------------------------- */
.check{
  height: 20px;
  width: 20px;
  border-radius: 20px;


}
.check-titulo{
    padding: 5px 10px;
}

.contenedor-check{
    display: flex;
    justify-content: space-evenly;
    padding: 5px;
}

/* -------------------------------------------- */
.linea{
    width: 80%;
    margin: 20px;
    border-bottom: 0.3px solid rgb(226, 223, 223);
}
.contendor-botones{
    display: flex;
    padding: 10px;
    margin: 10px;
    text-align: center;
    align-items: center;
    justify-content: center;
}
.boton-submit{
    background-color: var(--color-principal);
    border: none;
    height: 40px;
    width: 280px;
    border-radius: 16px;
    color: white;
    box-shadow: 0 4px 4px 0 rgba(0,0,0,0.25);
    font-size: 16px;
    margin: 5px;
}
/* ------------------------------- */
/* Contendor de las materias */
/* ------------------------------- */
.contenedor-materias-todas{
  overflow-y: scroll;
  max-height: 270px;
}
.contenedor-una-materia{
   display: flex;
    justify-content: space-between;
    border-bottom: 0.5px dotted rgb(231, 226, 226);
    padding: 4px 10px 4px 4px ;

}



/* ----------------------------- */
/* Responsive  */
/* ------------------------------ */
@media only screen and (max-width: 768px){

    .contenedor-columnas{

        display: block;

    }

    .titulo-formulario{
        color: var(--color-principal);
    }
    .input{
        border: none;
        border: 1px solid var(--color-letra-secundaria);
        height: 30px;
        width: 80%;
        border-radius: 16px;
        margin: 9px;
        padding: 3px 10px;
        outline: none;
    }

    .formulario-registro-docente label{
        color:var(--color-letra-secundaria) ;

    }

    /* ---------------------------------------- */
    /* Contendor de los Checkbox */
    /* ---------------------------------------- */
    .check{
        height: 20px;
        width: 20px;
        border-radius: 20px;


    }
    .check-titulo{
        padding: 5px 10px;
    }

    .contenedor-check{
        display: flex;
        justify-content: space-evenly;
        padding: 5px;
    }

    /* -------------------------------------------- */
    .linea{
        width: 100%;
        margin: 20px;
        border-bottom: 0.3px solid rgb(226, 223, 223);
    }
    .contendor-botones{
        display: flex;
        padding: 10px;
        margin: 10px;
        text-align: center;
        align-items: center;
        justify-content: center;
    }

}


.error{
    border: 1px solid red;
}

    </style>
</head>
<body>
    <div class="formulario-registro-docente">

        <form action="{{ url('/Prueba') }}" method="post" enctype="multipart/form-data">
            <h3 class="titulo-formulario">Registro de Usuario</h3>
            <div class="contenedor-columnas">
                <div class="columna columna1">
                    @csrf
                    <div class="contenedor-check">
                        <label for="">Docente:</label>
                        <input class="check" type="checkbox" name="docente" id="docente" checked>
                        <label for="">Administrador:</label>
                        <input class="check" type="checkbox" name="admin" id="admin" disabled><br>

                    </div>

                    <label for="">Codigo SIS:</label><br>
                     <input class="input" type="text" name="codsis" id="codsis" value="{{old('codsis')}}"><br>
                    @error('codsis')
                        <small>*{{$message}}</small>
                    @enderror
                    <br>
                    <label for="">Nombres:</label><br>
                     <input class="input" type="text" name="nombres" id="nombres" value="{{old('nombres')}}"><br>
                    @error('nombres')
                        <small>*{{$message}}</small>
                    @enderror
                    <br>
                    <label for="">Apellido Paterno:</label><br>
                    <input class="input" type="text" name="apellidoP" id="apellidoP" value="{{old('apellidoP')}}"><br>
                    @error('apellidoP')
                        <small>*{{$message}}</small>
                    @enderror
                    <br>
                    <label for="">Apellido Materno:</label><br>
                    <input class="input" type="text" name="apellidoM" id="apellidoM" value="{{old('apellidoM')}}"><br>
                    <br>
                    <label for="">Correo Electronico:</label><br>
                    <input class="input" type="text" name="correo" id="correo" value="{{old('correo')}}"><br>
                    @error('correo')
                        <small>*{{$message}}</small>
                    @enderror
                    <br>
                    <label for="">Contraseña:</label><br>
                    <input class="input" type="password" name="contrasenia" id="contrasenia" value="{{old('contrasenia')}}"><br>
                    @error('contrasenia')
                        <small>*{{$message}}</small>
                    @enderror
                    <br>
                </div>
                <div class="columna columna2">
                    <label htmlFor="" class='titulo-materias'>Materias:</label><br />
                    <div class='linea'></div>
                </div>
                <br>
            </div>
            <div class="contendor-botones">
                <input class="boton-submit" type="submit" value="Registrar Docente">
            </div>


        </form>
    </div>

    <!-- <br><br>
    <select name="materias" id="materias" class="form-control" required="requiered">
        @foreach ($materias as $materia)
            <option value="{{ $materia['SisM_M']}}">{{$materia['Nomb_M']}}</option>
        @endforeach
    </select> -->
</body>
</html>
