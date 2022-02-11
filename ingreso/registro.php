<!DOCTYPE html>
<html lang="en">
<?php
 $CON = mysqli_connect('localhost', 'root', '', 'registrarse') or die('error en la conexión');
?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="main.css">
	<title>Ingresar</title>
</head>
<body>

	<div class="container">
		<div class="form__top">
			<h2>Formulario De <span>Ingreso</span></h2>
		</div>		
		<form class="form__reg" method="POST" action="REGISTRO.php">

            <input class="input" name="EMAIL" type="email" placeholder="Email" required autofocus >

			<input class="input" name="CLAVE" type="password" placeholder="Contraseña" required >
            
            <div class="btn__form">
            	<input class="btn__submit" name="INSERTAR" type="submit" value="INGRESAR">
                <input class="btn__reset" type="reset" value="LIMPIAR">	
            
            </div>
		</form>
	</div>

<?php
 if(isset($_POST["INSERTAR"])){
 $NOMBRE = $_POST["NOMBRE"];
 $EMAIL = $_POST["EMAIL"];
 $TELEFONO = $_POST["TELEFONO"];
 $DIRECCION = $_POST["DIRECCION"];
 $CLAVE= $_POST["CLAVE"];
 $INSERTAR = "INSERT INTO formulario (NOMBRE, EMAIL, TELEFONO, DIRECCION, CLAVE)
 VALUES ('$NOMBRE' , '$EMAIL' ,  '$TELEFONO' , '$DIRECCION' , '$CLAVE' )";
 $EJECUTAR = mysqli_query( $CON, $INSERTAR );
 if ($EJECUTAR) {
    echo ("<script>alert('SU USUARIO A SIDO INSERTADO CORRECTAMENTE!')</script>");}
 else {
    echo ("<script>alert('NO SE PUDO INSERTAR SU USUARIO')</script>");}
 }
?>


 

</body>
</html>
