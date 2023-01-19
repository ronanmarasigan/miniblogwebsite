<?php
    include_once 'header.php';
?>  
    <h2 class="text-center">Registration</h2>
    <section class="card" style="width: 40rem; margin:auto;margin-top:1em">
        <div class="card-body">
        <form class="col g-3" action="logic/signup-logic.php" method="post">
            <div class="col-md-12" style="margin-top:10px">
                <input type="text" name="uid" class="form-control" placeholder="Enter Username" >
            </div>
            <div class="col-md-12" style="margin-top:10px">  
                <input type="email" name="email" class="form-control" placeholder="Enter Email" >
            </div>
            <div class="col-md-12" style="margin-top:10px">
                <input type="password" name="pwd" class="form-control" placeholder="Enter Password">
            </div>
            <div class="col-md-12" style="margin-top:10px">
                <input type="password" name="pwdconfirm" class="form-control" placeholder="Confirm Password">
            </div>
            
            <div class="col-12" style="margin:10px">
                <button type="submit" name="submit" class="btn btn-primary">Register</button>

            </div>
            <span style="margin-left:10px"> Return to the <a  class="link-info" href="login.php">LOGIN PAGE</a></span>
        </form>
</div>
    </section>


<?php
    include_once 'footer.php'
?>