<?php
//convertimos en un array los datos de la api que estan en formato json y lo guardamos en una variable.
$datos = json_decode(file_get_contents("https://luisalumnos-714e4-default-rtdb.firebaseio.com/Alumnos/345.json"), true);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <h1> Alumnos</h1>
  <br>
  <h2>Nombre</h2>
  <br>
  <?php
  //imprime el dato específico
  echo $datos["nombre"];
  ?>
  <br>
<div class="">
  <img src="<?php echo $datos["imagen"];?>" alt="" width="100px" height="100px">
</div>
<br>
<?php
echo $datos["Apellido"];
?>
</body>
</html>
