<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Document</title>
</head>
<body>
 <form action="{{route('usuarios.store')}}" method="post">
  @csrf
  <label for='nombre'>Nombre</label>
  <input type='text' name='nombre' id='nombre'><br>
  <label for='nombre_usuario'>Nombre de usuario</label>
  <input type='text' name='nombre_usuario' id='nombre_usuario'><br>
  <label for='clave'>Clave</label>
  <input type='text' name='clave' id='clave'><br>
  <label for='tipo'>Tipo de usuario</label>
  <select name="tipo" id="tipo">
   <option value="cliente">Cliente</option>   
   <option value="empleado">Empleado</option>   
  </select>
  <br>
  <input type="submit" value="ENVIAR">

 </form>
</body>
</html>