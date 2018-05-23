<?php
    include_once 'header.php';
    if (isset($_SESSION['u_id'])) {
                                    
                                } else {
                                    header("Location:index.php");
                                    exit;
                                }
                                echo  "<br>"

                            ?>





    <div class="container">
      <div class="col-md-9 personal-info">

        <form action="includes/agregarauto.inc.php" method="POST" class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Patente:</label>
            <div class="col-lg-8">
              <input class="form-control" name="aPatente" type="text" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Marca:</label>
            <div class="col-lg-8">
              <input class="form-control" name="aMarca" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Modelo:</label>
            <div class="col-lg-8">
              <input class="form-control" type="int" name="aModelo">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Asientos:</label>
            <div class="col-lg-8">
              <input class="form-control" name="aAsientos" type="text">
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

