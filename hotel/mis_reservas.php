<?php
include 'scripts/conexion.php';
session_start();
//si hay una sesión
if (isset($_SESSION['name'])){
//se muestra el contenido de la página web

$registros = "SELECT * FROM reservas order by cod_huesp asc";
?>

<?php include_once 'header.php';?>

<section class="w3l-breadcrumb">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">
            <h2>Mis Reservas</h2>
            <p><a href="home.php">Principal</a> &nbsp; / &nbsp; Mis Reservas</p>
        </div>
    </div>
</section>


<div class="container">
  <div class="row">        
    <div class="col-md-12">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="row">#</th>
              <th scope="row" class="text-center">Fecha de Ingreso</th>
              <th scope="row" class="text-center">Fecha de Salida</th>
              <th scope="row" class="text-center">Cantidad de Adultos</th>
              <th scope="row" class="text-center">Cantidad de Niños</th>
              <th scope="row" class="text-center">Tipo de Habitación</th>
              <th scope="row" class="text-center">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>

            <?php
            $resultado = mysqli_query($conexion, $registros); 
            if(mysqli_affected_rows($conexion)>0) {
            while ($row=mysqli_fetch_assoc($resultado)) {
            ?>
              <td scope="row"><?php echo $row['cod_huesp'] ?></td>
              <td class="text-center"><?php echo $row['fech_ingreso'] ?></td>
              <td class="text-center"><?php echo $row['fech_salida'] ?></td>
              <td class="text-center"><?php echo $row['cant_adultos'] ?></td>
              <td class="text-center"><?php echo $row['cant_ninhos'] ?></td>
              <td class="text-center"><?php echo $row['tipo_hab'] ?></td>
              <td>
                <ul class="nav justify-content-center" style="color: #fff">
                  <li class="nav-item">
                    <a href="editar_reservas.php?id=<?php echo $row['cod_huesp'];?>" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalLRForm"><span class="fa fa-pencil"></span></a>
                  </li>
                  <li class="nav-item">
                    <a href="baja_reservas.php?id=<?php echo $row['cod_huesp'];?>" class="btn btn-sm btn-danger"><span class="fa fa-trash"></span></a>
                  </li>
                </ul>
              </td>
            <?php
              }
            } else {
            ?>
              <td colspan="7" class="text-center">Sin Reservas!</td>
            <?php
            }
            ?>
            
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!--Body-->
<section class="w3l-availability-form" id="booking">
    <!-- /w3l-availability-form-section -->
    <div class="w3l-availability-form-main py-5">
        <div class="container pt-lg-3 pb-lg-5">
            <div class="forms-top">
                <div class="form-right">
                    <div class="form-inner-cont">
                        <h3 class="title-small">Comprobar Disponibilidad</h3>
                        <form action="proceso_actualizar.php?id=<?php echo $_SESSION['uk'];?>" method="post" class="signin-form">
                            <div class="row book-form">
                                <div class="form-input col-md-6 col-sm-8 mt-3">
                                    <label>Fecha de Ingreso</label>
                                    <input type="date" name="fech_ingreso" placeholder="Date" required="">
                                </div>
                                <div class="form-input col-md-6 col-sm-8 mt-3">
                                    <label>Fecha de Salida</label>
                                    <input type="date" name="fech_salida" placeholder="Date" required="">
                                </div>
                                <div class="form-input col-md-6 col-sm-8 mt-3">
                                    <label>Adultos</label>
                                    <select class="selectpicker" name="cant_adultos">
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                    </select>

                                </div>
                                <div class="form-input col-md-6 col-sm-8 mt-3">
                                    <label>Niños</label>
                                    <select class="selectpicker" name="cant_niños">
                                        <option>Ninguno</option>
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                    </select>
                                </div>
                                <div class="form-input col-md-6 col-sm-8 mt-3">
                                    <label>Tipo de Habitación</label>
                                    <select class="selectpicker" name="tipo_hab">
                                        <option>Simple</option>
                                        <option>Doble</option>
                                        <option>Familiar</option>
                                        <option>Resort</option>
                                    </select>
                                </div>                                
                                <div class="bottom-btn col-md-6 col-sm-8 mt-5">
                                    <button type="submit" class="btn btn-style btn-primary w-100 px-2">RESERVA AHORA
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

<?php include_once 'footer.php';?>

<?php
}//si no hay sesión
else{
    //se redirecciona
    header ('location: ../principal.php');
}
?>

