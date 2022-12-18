
	<head>
		<title>MI HOJA DE VIDA </title>
			<meta name="description" content="Esta es la primera versión de la página web">
			<meta charset="utf-8">
		<link rel="icon" href="imagenes/iconoweb.jpg">
		<meta name="keyworks" contend="HTML, CSS, JavaScript">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

<body background="imagenes/fondoweb.jpg " width="2000px "
height="1500px ">
<?php include("header.php"); ?>

<?php include("nav.php"); 

?>
</body>
<main>
	<?php
include("./include/herramientas.php");
 // --- Importamos los metodos encargados de la conexión y gestión con la base de datos
 include("./include/conect.php");

 // -- Lanzamos la conexión con la base de datos
// para este ejemplo se asumirá que los datos están correctos, sin embargo
// es necesario implementar una mejora posterior que controle los posibles
// errores de conexión
$LinkBD=Conectarse("localhost" , "root" , "root" , "web_personal_APRENDIZ"); 

// -- Ejecutamos el QUERY (consulta) para extraer la información requerida
$ScriptSQL = "SELECT * FROM glosario"; 

if ($DatosEstudio = mysqli_query($LinkBD, $ScriptSQL )) {
	// -- Iniciamos la publicación de los datos, mostrando la cabecera de la tabla.
	// en este caso, un solo renglón con el título "Estudios Realizados"

	// -- inicio ciclo repetitivo que recorre la matriz de $DatosEstudio procesando
 // línea por línea los datos serán distribuidos en las diferentes celdas
 // de la tabla (plantilla prediseñada)
 while($fila = mysqli_fetch_array($DatosEstudio)){
	echo"
	<section id='html'>
	<h4>".$fila["id"].".".$fila["termino"]."</h4>
	<table>
		<article>
			<p></p>
			<table border='5'>
				<tr>
					<td><img src='./imagenes/".$fila["imagen"]."' height='180 '></td>
					<td>".$fila["definicion"]."</td></td>
				</tr>
			</table>
		</article>
</section>
	";}
	// --- aquí finaliza el ciclo while
	// -- liberar el conjunto de resultados
	mysqli_free_result($DatosEstudio);
	}
	else {
	printf("Hubo errores al leer los datos");
	}
	//Cerrar la conexión con el servidor de bases de datos:
	mysqli_close($LinkBD); 
	
	
	
	?>


</main>
<?php include("footer.php"); ?>

</body>