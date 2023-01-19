<?php
    include_once 'header.php';
?>
    <section style="width: 60rem; margin:auto;margin-top:1em">
    <h2>Create a Post!</h2>
        <form class="col g-3" action="logic/create-logic.php" method="post">
            <div class="col-md-12" style="margin-top:20px">
                <input type="text" name="title" class="form-control" id="inputuid" placeholder="Enter Title">
            </div>
            <div class="col-md-12" style="margin-top:20px">
                <textarea type="text" name="content" class="form-control" id="inputemail" placeholder="Enter Content" > </textarea>
            </div>
            
            <div class="col-12" style="margin:10px">
                <button type="submit" name="submit" class="btn btn-primary">Post</button>
            </div>
        </form>
    </section>
   

<?php
    include_once 'footer.php'
?>