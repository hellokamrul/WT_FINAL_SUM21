<?php
 include 'admin_header.php';
 include 'controllers/category_cntrl.php';
 $id=$_GET["id"];
 $c=getCategory($id);
?>

<html>
    <body>
        <h5><?php echo $err_db; ?></h5>
        <fieldset>
        <legend><h3>Edit Category</h3></legend>
        
        <form action="" method="post">
            Name: <input type="text" name="cat" value="<?php echo $c["name"];?>" placeholder="Enter name">
            <span><?php echo $err_cname; ?></span>
        <br>
        <input type="submit" name="edit" value="Edit">
        </form>
        </fieldset>
    </body>
</html>

<?php include 'admin_footer.php'; ?>