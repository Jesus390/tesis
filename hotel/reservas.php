<?php
include 'conexion.php';
session_start();
//si hay una sesión
if (isset($_SESSION['name'])){
//se muestra el contenido de la página web
$registros = "SELECT * FROM habitaciones";
?>

<?php include_once 'header.php';?>

<section class="w3l-breadcrumb">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">
            <h2>Reservas</h2>
            <p><a href="/">Principal</a> &nbsp; / &nbsp; Reservas</p>
        </div>
    </div>
</section>

<?php
$resultado = mysqli_query($conexion, $registros);
        while ($row=mysqli_fetch_assoc($resultado)) {  ?>

<div class="card-deck mt-4 ml-4 mr-4 justify-content-center">
  <div class="card mb-4" style="max-width: 650px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);  ?>" class="card-img mt-3 ml-2" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <a class="ml-4 mt-1 btn btn-success btn-md float-right" style="width: 10rem;">
            <p class="text-uppercase"><small class="text-light font-weight-bold">A partir de:</small></p>
          <p class="card-text text-light"><?php echo $row['precio'] ?>₲</p>
          <p class="card-text"><small class="text-light font-weight-bold">Por noche.</small></p></a>
          <h5 class="card-title"><?php echo $row['nombre'] ?></h5>
          <p class="card-text"><?php echo $row['descripcion'] ?></p>
          
        </div>
      </div>
    </div>
  </div>
</div>

<?php  }?>

<?php include_once 'footer.php';?>

<?php
}//si no hay sesión
else{
    //se redirecciona
    header ('location: /');
}
?>

