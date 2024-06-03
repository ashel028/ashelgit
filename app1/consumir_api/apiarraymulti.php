<?php
//convertimos en un array los datos de la api que estan en formato json y lo guardamos en una variable.

$datos = json_decode(file_get_contents("https://lcpp-d8253-default-rtdb.firebaseio.com/alumnos.json"), true);
print_r ($datos);
//en este caso se utiliza toda la Api


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <hr>
    <br>

<h1> Alumnos</h1>

<h2>Nombre</h2>
<br>
<?php
//como el array es multidimensional para llamar a un dato se debe colocar [la key] y [el asociativo]
echo $datos[326]["nombre"];

 ?>

<br>

<img src="<?php echo $datos[326]["imagen"];?>" alt="" width="100px" height="100px">

<br>
<hr>

<?php
//recorremos la matris multidimencional con el foreach.
// se utiliza un foreach anidado para recorrer los distintos niveles del $array.
foreach($datos as $dato => $matricula)
{
	echo "<h1> $dato </h1>";

    foreach($matricula as $infoalumno => $valor)
	{
		echo "<p> $infoalumno:$valor </p>"; //muestra todos los valores
	}
}
 ?>

<br>
<hr>

<?php
// en este caso no necesito anidar otro foeach porque no lo quiero recorrer quiero que me muestre datos especificos.
foreach($datos as $matricula => $infoalumno)
{
	echo "<h1> $matricula </h1>";

  echo $infoalumno['nombre'];

  echo  $infoalumno["apellido"];

}
 ?>




</body>
</html>
