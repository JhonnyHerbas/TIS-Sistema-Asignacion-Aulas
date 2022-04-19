Esto es la prueba de ingreso de datos
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/Prueba') }}" method="post" enctype="multipart/form-data">
        @csrf
        Docente<input type="checkbox" name="docente" id="docente">
        Admin<input type="checkbox" name="admin" id="admin"><br>
        Nombre<input type="text" name="nombres" id="nombres" value="{{old('nombres')}}">
        @error('nombres')
            <small>*{{$message}}</small>
        @enderror
        <br>
        ApellidoPaterno<input type="text" name="apellidoP" id="apellidoP" value="{{old('apellidoP')}}">
        @error('apellidoP')
            <small>*{{$message}}</small>
        @enderror
        <br>
        ApellidoMaterno<input type="text" name="apellidoM" id="apellidoM" value="{{old('apellidoM')}}"><br>
        Correo<input type="text" name="correo" id="correo" value="{{old('correo')}}">
        @error('correo')
            <small>*{{$message}}</small>
        @enderror
        <br>
        Contrasenia<input type="text" name="contrasenia" id="contrasenia" value="{{old('contrasenia')}}">
        @error('contrasenia')
            <small>*{{$message}}</small>
        @enderror
        <br>
        <input type="submit" value="Guardar">
    </form>
    <br><br>
    <select name="materias" id="materias" class="form-control" required="requiered">
        @foreach ($materias as $materia)
            <option value="{{ $materia['SisM_M']}}">{{$materia['Nomb_M']}}</option>
        @endforeach
    </select>
</body>
</html>


