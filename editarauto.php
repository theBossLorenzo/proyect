<?php
    include_once 'header.php';
    if (isset($_SESSION['u_id'])) {
                                    
                                } else {
                                    header("Location:index.php");
                                    exit;
                                }
                            ?>




<?php
    include_once 'footer.php';
?>
