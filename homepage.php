<?php
    include_once 'header.php';
    include "logic/create-logic.php";
?>

    <section>
    <div class="col">
            <?php foreach($query as $post){ ?>
                <div>
                    <div class="card" style="width: 40rem; margin:auto;margin-top:1em">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $post['title'];?></h5>
                            <p class="card-text"><?php echo ($post['content']);?></p>
                            <p class="card-text"><?php echo "Date: ". ($post['date']);?></p>
                            <div class="d-flex">
                                <form method="post">
                                    <input type="text" hidden value='<?php echo $post['id']?>' name="id">
                                    <button class="btn btn-danger" name="delete" >Delete</button>
                                </form>
                                <a class="btn btn-success"  style="margin-left:10px" href="editpost.php" >Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>

        <div class="card" style="width: 40rem; margin:auto;margin-top:1em;margin-bottom:4em;">
            <div class="card-body">
                <a type="button" href="createnewpost.php" class="btn btn-primary" style="width: 15rem;">Create New Post</a>
            </div>
        </div>
    </section>

<?php
    include_once 'footer.php'
?>