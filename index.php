<?php
    include_once 'header.php';
?>

<section class="main-container">
      <div class="main-wrapper">
      <?php
         if (isset($_SESSION['u_id'])) {
                                    header("Location:loggedIn.php");
                                    exit;
                                } else {
      
                                }
                            ?>
      </div>
</section>

<?php
    include_once 'footer.php';
?>


