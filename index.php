<?php
    include_once 'header.php';
?>
<div class="card" style="width: 30rem; margin:auto; margin-top:10em;">
  <div class="card-body">
    <h5 class="card-title text-center">My BLOG</h5>
    <?php
        if(isset($_SESSION["useruid"])){
            echo "<h2 class='card-title text-center'>Hello! " . $_SESSION["useruid"] . "</h2>";
            
        }
    ?>
  </div>
</div>

<?php
    include_once 'footer.php'
?>