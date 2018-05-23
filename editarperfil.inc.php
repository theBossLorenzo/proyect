<?php
    session_start();
    include 'dbh.inc.php';
    $first = $_POST['ufirst'];
    $last = $_POST['ulast'];
    $contacto = $_POST['ucontacto'];
    $edad = $_POST['uedad'];
    $nacio = $_POST['unacio'];
    $uid = $_SESSION['u_uid'];
    if (empty($first) || empty($last) || empty($contacto) || empty($edad) || empty($nacio)) {
         header("Location: ../perfil.php?=incomplete");
         exit();
    } else {
    $sql = "UPDATE users SET user_first = '$first', user_last = '$last', user_contacto = '$contacto', user_edad = '$edad', user_nacio = '$nacio' WHERE user_uid = '$uid'";
    mysqli_query($conn, $sql);
    header("Location: ../perfil.php");
    exit(); }
