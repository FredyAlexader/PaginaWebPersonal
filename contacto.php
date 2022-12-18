
<head>
    <title>MI HOJA DE VIDA </title>
    <meta name="description" content="Esta es la primera versión de la página web">
    <meta charset="utf-8">
    <link rel="icon" href="imagenes/iconoweb.jpg">
    <meta name="keyworks" contend="HTML, CSS, JavaScript ">
		<link rel="stylesheet " type="text/css " href="css/contacto.css ">

	</head>



<body background="imagenes/fondoweb.jpg " width="2000px "
height="1500px ">


<?php
include("header.php");
include("nav.php"); 
?>
</body>


<body>
	<div class="contenedor">
		<form action=" " class="form ">
			<div class="form-header ">
				<h1 class="form-title "><span>contacto</span></h1>

			</div>
			<label for="nombre " class="form-label ">nombres</label>
			<input type="text " id="nombre " class="form-input " placeholder="escriba su nombre ">



			<label for="direccion " class="form-label ">direccion</label>
			<input type="text " id="direccion " class="form-input " placeholder="escriba su direccion ">


			<label for="correo " class="form-label ">correo electronico</label>
			<input type="email " id="correo " class="form-input " placeholder="escriba su correo ">

			<label for="mensaje " class="form-label ">mensaje</label>
			<textarea id="mensaje " class="form-textarea " placeholder="aqui escriba su mensaje "></textarea>
			
			<button type="submit " class="btn-submit ">enviar</button>
		</form>
	</div>
</body>

<?php include("footer.php"); ?>

</html>