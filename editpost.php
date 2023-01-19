<?php
    include_once 'header.php';
    include "logic/create-logic.php";
?>

    <section>
    <div class="container mt-5">
        <h2>Edit Post</h2>
        <?php foreach($query as $q){ ?>
            <form method="POST">
                <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                <input type="text" placeholder="Title" class="form-control my-3 " name="title" value="<?php echo $q['title']?>">
                <textarea name="content" class="form-control my-3e" cols="30" rows="3"><?php echo $q['content']?></textarea>
                <button class="btn btn-success" style="margin-top:20px" name="update">Save</button>
            </form>
        <?php } ?>    
   </div>
    </section>

<?php
    include_once 'footer.php'
?>