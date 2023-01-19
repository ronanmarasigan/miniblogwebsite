<?php
    include_once 'header.php';
?>
    
    <section class="card" style="width: 40rem; margin:auto; margin-top:1em;">
    <h2 style="margin-left:10px">Login</h2>
    <div class="card-body">
        <form class="col g-3" action="logic/login-logic.php" method="post">
            <div class="col-md-12" style="margin-top:10px">
                <input type="text" name="uid" class="form-control" id="inputuid" placeholder="Enter Email" >
            </div>
            <div class="col-md-12" style="margin-top:10px">
                <input type="password" name="pwd" class="form-control" id="inputpwd" placeholder="Enter Password">
            </div> 
            <div class="col-12" style="margin:auto; margin-top:1em;">
                <button type="submit" name="submit" class="btn btn-success">Login</button>
                <a type="submit" href="signup.php" class="btn btn-success">Register</a>
            </div>
        </form>
</div>
    </section>

<?php
    include_once 'footer.php'
?>