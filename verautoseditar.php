<?php
    include_once 'header.php';
    if (isset($_SESSION['u_id'])) {
                                    
                                } else {
                                    header("Location:index.php");
                                    exit;
                                }
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn,"loginsystem");
    $uid = $_POST['usuario'];
    $sqluid = "SELECT * FROM autos WHERE auto_uid = '$uid'";
    $result = mysqli_query($conn,$sqluid);
    $autito = 1;
    echo "Autos de ", $uid  . '<br />';
    echo ""  . '<br />';
    echo ""  . '<br />';
    while($row = $result->fetch_assoc()){
        echo "Auto ", $autito  . '<br />';
        echo ""  . '<br />';
        $autito = $autito + 1;
        echo "Marca: ", $row['auto_marca'] . '<br />';
        echo "Modelo: ", $row['auto_modelo'] . '<br />';
        echo "Asientos disponibles: ", $row['auto_asientos'] . '<br />';
        echo "Patente: ", $row['auto_patente'] . '<br />';
        echo ""  . '<br />';
    }   
?>




<?php
    include_once 'footer.php';
?>
