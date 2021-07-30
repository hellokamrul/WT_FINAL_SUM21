<?php
    include 'controllers/user.php';
?>

<html>
    <body>
    <h4><?php echo $err_db; ?></h4>
        <form action="" method="post">
            <fieldset>
                <p align="middle"><font color="blue" size="5">Login</font></p>
            <table align="center">
                <tr>
                    <td>
                        <input type="text" name="username" value="<?php echo $uname; ?>" placeholder="Username">
                        <span><?php echo $err_uname; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="password" name="password" value="<?php echo $upass; ?>" placeholder="Password">
                    <span><?php echo $err_upass; ?></span>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <input type="submit" name="login" value="Login">
                    </td>
                </tr>
            </table>
            </fieldset>
        </form>
    </body>
</html>
