<?php
    include_once 'header.php';
      include 'includes/dbh.inc.php';
?>

<?php
         if (isset($_SESSION['u_id'])) {
                                    
                                } else {
                                    header("Location:index.php");
                                    exit;
                                }


    $uid = $_SESSION['u_uid'];
    $sqluid = "SELECT * FROM users WHERE user_uid = '$uid'";
    $result = mysqli_query($conn,$sqluid);
    $row = $result->fetch_array(MYSQLI_BOTH);  ?>

<div class="container">
      <div class="col-md-9 personal-info">

        <form action="includes/editarperfil.inc.php" method="POST" class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Nombre:</label>
            <div class="col-lg-8">
              <input class="form-control" name="ufirst" type="text" value="<?php echo $row['user_first']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Apellido:</label>
            <div class="col-lg-8">
              <input class="form-control" name="ulast" type="text" value="<?php echo $row['user_last']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Contacto:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="ucontacto" value="<?php if ($row['user_contacto']!= NULL){ echo $row['user_contacto'];}?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Edad:</label>
            <div class="col-lg-8">
              <input class="form-control" name="uedad" type="text" value="<?php if ($row['user_edad']!= NULL){ echo $row['user_edad'];}?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Nacionalidad:</label>
            <div class="col-lg-8">
              <input class="form-control" name="unacio" type="text" value="<?php if ($row['user_nacio']!= NULL){ echo $row['user_nacio'];}?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
          <input type="submit" class="btn btn-primary" value="Guardar cambios">
            <span></span>
         </form>
            <form action="perfil.php">
                  <input type="submit" class="btn btn-default" value="Cancelar">
            </form>
            </div>



<?php
    include_once 'footer.php';
?>


