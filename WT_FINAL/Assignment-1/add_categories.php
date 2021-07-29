<?php
 include 'admin_header.php';
 include 'controllers/category_cntrl.php';
?>

<html>
    <body>
        <h5><?php echo $err_db; ?></h5>
        <fieldset>
        <legend><h3>Add Category</h3></legend>
        
        <form action="" method="post">
            Name: <input type="text" name="cat" value="<?php echo $cname;?>" placeholder="Enter name">
            <span><?php echo $err_cname; ?></span>
        <br>
        <input type="submit" name="add" value="Add">
        </form>
        </fieldset>
    </body>
</html>

<?php include 'admin_footer.php'; ?>