<?php
    session_start();
    include 'dbh.inc.php';
    $marca = $_POST['aMarca'];
    $patente = $_POST['aPatente'];
    $modelo = $_POST['aModelo'];
    $asientos = $_POST['aAsientos'];
    $uid = $_SESSION['u_uid'];
    if (empty($marca) || empty($patente) || empty($modelo) || empty($asientos) ) {
         header("Location: ../perfil.php?=incomplete");
         exit();
    } else {
    $sql = " SELECT * FROM autos WHERE auto_patente = '$patente'";
    $result=mysqli_query($conn, $sql);
    if (!$result->fetch_array(MYSQLI_BOTH)){
        $consulta = "INSERT INTO autos (auto_patente, auto_uid, auto_marca, auto_modelo, auto_asientos) VALUES('$patente','$uid', '$marca', '$modelo', '$asientos')";
        mysqli_query($conn, $consulta);

    }
     }


    header("Location: ../perfil.php");
    exit();