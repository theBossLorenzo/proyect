<?php
    include_once 'header.php';
?>

<section class="main-container">
      <div class="main-wrapper">
        <?php
         if (isset($_SESSION['u_id'])) {
                                    
                                } else {
                                    header("Location:index.php");
                                    exit;
                                }
                            ?>
      
      </div>
</section>

<?php
    include_once 'footer.php';
?>
