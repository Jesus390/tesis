<?php
if(isset($_POST['datos_introducidos_email']) && isset($_POST['datos_introducidos_password'])) {
    //se establece una conexión a la base de datos
    include 'conexion.php';
    //se validarán los campos si la sesion aún no está abierta

    //se escaparán caracteres peligrosos
    $email=mysqli_real_escape_string($conexion,$_POST['datos_introducidos_email']);
    $contraseña_introducida=htmlentities(htmlspecialchars($_POST['datos_introducidos_password']));
    $password= md5(crc32(sha1($contraseña_introducida)));
    //se hará la consulta a la base de datos
    $consulta='SELECT * FROM usuarios WHERE email="'.$email.'" AND pass="'.$password.'";';
    //si hubo un resultado
    if ($r = $conexion->query($consulta)) {
        $r = mysqli_fetch_array($r, MYSQLI_ASSOC);
        session_start();
        $_SESSION['name']=$r['nombre'];
        $_SESSION['uk'] = "$".$r['id']."$".$r['pass'];
        header ('location: ../home.php');
    } else {
        header("Location: /");
    }
} else {
    header("Location: /");
}

?>