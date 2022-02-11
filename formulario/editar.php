
<?php
 if(isset($_GET['editar'])){

    $editar_id=$_GET['editar'];
    $CONSULTA="SELECT * FROM formulario WHERE Id='$editar_id'"; //apuntador en la tabla
    $EJECUTAR=mysqli_query($CON, $CONSULTA); //pasa al buffer los datos "Si hay conexión"
    $fila=mysqli_fetch_array($EJECUTAR); //pasa a una variable el registro
    $NOMBRE=$fila['NOMBRE'];
    $EMAIL=$fila['EMAIL'];
    $TELEFONO=$fila['TELEFONO'];
    $DIRECCION=$fila['DIRECCION'];
    $CLAVE=$fila['CLAVE'];
    }
   ?>


   <div class="container">
		<div class="form__top">
			<h2>Formulario <span>Registro</span></h2>
		</div>		
		<form class="form__reg"  method="POST" ACTION="">
			<input class="input" name="NOMBRE" type="text" placeholder="Nombre" value="<?php echo $NOMBRE; ?>" autofocus>
            <input class="input" name="EMAIL" type="email" placeholder="Email" value="<?php echo $EMAIL; ?>">
            <input class="input" name="TELEFONO" type="text" placeholder="Telefono" value="<?php echo $TELEFONO; ?>">
            <input class="input" name="DIRECCION" type="text" placeholder="Direccion" value="<?php echo $DIRECCION; ?>">
            <input class="input" name="CLAVE" type="password" placeholder="Contraseña" value="<?php echo $CLAVE; ?>">
            
            <div class="btn__form">
            	<input class="btn__submit" NAME="ACTUALIZAR" value="ACTUALIZAR" type="submit" ></br>
                
            
            </div>
		</form>
	</div>
   <?php
    if (isset($_POST['ACTUALIZAR'])){
    $actualizar_usuario=$_POST['NOMBRE'];
    $actualizar_email=$_POST['EMAIL'];
    $actualizar_telefono=$_POST['TELEFONO'];
    $actualizar_direccion=$_POST['DIRECCION'];
    $actualizar_clave=$_POST['CLAVE'];
    $actualizar="UPDATE formulario SET NOMBRE='$actualizar_usuario', EMAIL='$actualizar_email', TELEFONO='$actualizar_telefono' , DIRECCION='$actualizar_direccion' , CLAVE='$actualizar_clave' WHERE Id='$editar_id'";
    $EJECUTAR=mysqli_query($CON, $actualizar);
    if ($EJECUTAR) {
    echo "<script>alert('Datos actualizados!')</script>";
    echo "<script>window.open('REGISTRO.php','_self')</script>";
    }
    }
   ?>
   