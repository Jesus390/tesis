<?php
//se establece una conexion a la base de datos
if(isset($_POST)) {
	include 'conexion.php';
	//si se han enviado datos
	
	$nombre = $_POST['datos_registrar_nombre'];
	$email = $_POST['datos_registrar_email'];
	$password= password_hash($_POST['datos_registrar_password'],PASSWORD_DEFAULT);

	$sql = "INSERT INTO ohana.usuarios ( nombre, email, pass) VALUES ( '$nombre', '$email', '$password');";

	$resultado = mysqli_query($conexion, $sql);

	if($resultado) {
		echo "<script>alert('Se ha registrado el usuario con éxito :)');
		window.location='/principal.php'</script>";
	} else {
		header ('location: ./');
	}
}
?>