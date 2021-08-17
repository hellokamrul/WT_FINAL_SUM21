<?php
    session_start();
    $adminid ="";
    $adminpass ="";

    if(isset($_POST['admin_login'])) {
        $adminid = $_POST['adminid'];
        $adminpass = $_POST['adminpass'];

        if($adminid == "admin" && $adminpass == "123456") {
            $_SESSION['adminName'] = "TEAM GORENT";

            header('Location: admin_dashboard.php');
        } else {
            echo "WRONG USERNAME/ PASSWORD!";
        }
    }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Admin</title>
    
</head>
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td>ID: </td>
                <td><input type="text" name="adminid"></td>
            </tr>
            <tr>
                <td>PASSWORD: </td>
                <td><input type="password" name="adminpass"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="admin_login" value="LOGIN AS ADMIN"></td>
            </tr>
        </table>
    </form>
  
</body>
</html>