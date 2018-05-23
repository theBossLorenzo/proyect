<?php
    include_once 'header.php';
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn,"loginsystem");
    $uid = $_SESSION['u_uid'];
    $sqluid = "SELECT * FROM users WHERE user_uid = '$uid'";
         if (isset($_SESSION['u_id'])) {
                                    
                                } else {
                                    header("Location:index.php");
                                    exit;
                                }
                            ?>

<div class="container">
<div class="row">
<div class="col-md-7 ">
<div class="panel panel-default">
<div class="panel-heading" style="text-align: center;">&nbsp;</div>
<div class="panel-body">
<div class="box box-info">
<div class="box-body">
<div class="col-sm-6">
<div align="center"><img id="profile-image1" class="img-circle img-responsive" style="display: block; margin-left: auto; margin-right: auto;" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" alt="User Pic" /> <input id="profile-image-upload" class="hidden" type="file" />



<div class="clearfix" style="text-align: center;">&nbsp;</div>
    <hr style="margin: 5px 0 5px 0;" />
<div class="col-sm-5 col-xs-6 tital " style="text-align: center;">Usuario:</div>
<h4  class="col-sm-7 col-xs-6 " style="text-align: center, color=#00b1b1;"><?php
    $result = mysqli_query($conn,$sqluid);
    $row = $result->fetch_array(MYSQLI_BOTH);
    echo $row['user_uid'];
    ?></h4>
<div class="clearfix" style="text-align: center;">&nbsp;</div>
<div class="bot-border" style="text-align: center;">&nbsp;</div>
<div class="col-sm-5 col-xs-6 tital " style="text-align: center;">Nombre:</div>
<div class="col-sm-7 col-xs-6 " style="text-align: center;"><?php 
    $result = mysqli_query($conn,$sqluid);
    $row = $result->fetch_array(MYSQLI_BOTH);
    echo $row['user_first'];
    ?></div>
<div class="clearfix" style="text-align: center;">&nbsp;</div>
<div class="bot-border" style="text-align: center;">&nbsp;</div>
<div class="col-sm-5 col-xs-6 tital " style="text-align: center;">Apellido:</div>
<div class="col-sm-7" style="text-align: center;"><?php 
    $result = mysqli_query($conn,$sqluid);
    $row = $result->fetch_array(MYSQLI_BOTH);
    echo $row['user_last'];
    ?>&nbsp;</div>
<div class="bot-border" style="text-align: center;">&nbsp;</div>
    <div class="clearfix" style="text-align: center;">&nbsp;</div>
<div class="col-sm-5 col-xs-6 tital " style="text-align: center;">Contacto:</div>
<div class="col-sm-7" style="text-align: center;"><?php 
    $result = mysqli_query($conn,$sqluid);
    $row = $result->fetch_array(MYSQLI_BOTH);
    echo $row['user_contacto'];
    ?></div>
<div class="clearfix" style="text-align: center;">&nbsp;</div>
<div class="clearfix" style="text-align: center;">&nbsp;</div>
<div class="col-sm-5 col-xs-6 tital " style="text-align: center;">Edad:</div>
<div class="col-sm-7" style="text-align: center;"><?php 
    $result = mysqli_query($conn,$sqluid);
    $row = $result->fetch_array(MYSQLI_BOTH);
    echo $row['user_edad'];
    ?></div>
<div class="clearfix" style="text-align: center;">&nbsp;</div>
<div class="bot-border" style="text-align: center;">&nbsp;</div>
<div class="col-sm-5 col-xs-6 tital " style="text-align: center;">Nacionalidad:</div>
<div class="col-sm-7" style="text-align: center;"><?php 
    $result = mysqli_query($conn,$sqluid);
    $row = $result->fetch_array(MYSQLI_BOTH);
    echo $row['user_nacio'];
    ?></div>
<div class="clearfix">&nbsp;</div>
    <hr style="margin: 5px 0 5px 0;" />
    <form action="editarperfil.php">
        <button type="submit" name="editar" class="btn btn-primary btn-sm">Editar Perfil</button>
</form>
<div class="clearfix">&nbsp;</div>
    <hr style="margin: 5px 0 5px 0;" />
    <form action="verautos.php">
        <button type="submit" name="ver" class="btn btn-primary btn-sm">Ver Autos</button>
</form>
<div class="clearfix">&nbsp;</div>
    <hr style="margin: 5px 0 5px 0;" />
    <form action="agregarauto.php">
        <button type="submit" name="agregar" class="btn btn-primary btn-sm">Agregar Auto</button>
</form>

</div>
</div>
</div>
</div>
</div>
</div>
</div>



<?php
    include_once 'footer.php';
?>


