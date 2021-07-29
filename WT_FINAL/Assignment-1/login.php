<?php
    include 'controllers/user_cntrl.php';
?>

<html>
    <head>

    </head>
    <body>
    <h5><?php echo $err_db; ?></h5>
        <form action="" method="post">
            <fieldset>
                <legend><h1>Login</h1></legend>
            <table align="center">
                <tr>
                    <td>
                        <input type="text" name="username" value="<?php echo $uname; ?>" placeholder="Enter Username">
                        <span><?php echo $err_uname; ?></span>
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
                        <input type="submit" name="login" value="Login">
                    </td>
                </tr>
                <tr>
                    <td>
                        Not registed yet!
                        <a href="signup.php">Signup
                    </td>
                </tr>
            </table>
            </fieldset>
        </form>
    </body>
</html>



<?php

?>

