<?php //include 'admin_header.php'; ?>
<?php include 'controllers/user_cntrl.php'; ?>
<html>
    <head>

    </head>
    <body>
        <h5><?php echo $err_db; ?></h5>
        <form action="" method="POST">
            <fieldset>
                <legend><h1>Sign up</h1></legend>
            <table align="center">
                <tr>
                    <td>
                        <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Enter Name">
                        <span><?php echo $err_name; ?></span>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                    <input type="text" name="username" value="<?php echo $uname; ?>" placeholder="Enter Username">
                    <span><?php echo $err_uname; ?></span>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                    <input type="text" name="email" value="<?php echo $uemail; ?>" placeholder="Enter Email">
                    <span><?php echo $err_uemail; ?></span>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                    <input type="password" name="password" value="<?php echo $upass; ?>" placeholder="Enter Password">
                    <span><?php echo $err_upass; ?></span>
                    </td>
                    
                </tr>
                <tr>
                    <td align="center">
                        <input type="submit" name="signup" value="Sign up">
                    </td>
                </tr>
            </table>
            </fieldset>
        </form>
    </body>
</html>



<?php

?>

