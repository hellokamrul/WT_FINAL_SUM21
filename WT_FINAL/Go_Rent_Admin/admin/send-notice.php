<?php require_once '../models/db_config.php'; ?>
<?php require_once 'controllers/NoticeController.php'; ?>
<?php require_once 'includes/GetUsers.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Admin Dashboard</title>
</head>
<body>

    <div class="main-content">

        <?php include 'includes/header.php'; ?>

        <br>

        <div class="content-wrapper">
            <!-- Update -->
            <span>SEND NOTICE</span>
            
            <form method="POST">
                        <table >
                            <tr>
                                <td>Email*</td>
                                <td>
                                
                                    <select name="email" id="">
                                    <?php
                                    $result = GetUsers();

                                    if(count($result)  > 0) {
                                        foreach($result as $key => $value) {
                                            ?>
                                        <option value="<?php echo $value['email']; ?>"><?php echo $value['email']; ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                                
                                
                                <?php echo $err_email;?>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Notice</td>
                                <td><textarea name="notice-text" ></textarea></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td><input type="submit" name="notice"></td>
                            </tr>
                        </table>
                </form>
                            <br><br>
                <div id="noticeplace" style="border: 1px solid black; padding: 12px;"></div>
                <br>   <br>
                <button onclick="ShowNotices();">SHOW NOTICES</button>

             

                <script>
                       function ShowNotices() {
    
                        var xhr = new XMLHttpRequest();

                        xhr.open("GET", "includes/GetNotices.php", true);
                        
                        xhr.onreadystatechange = function() {
                            if(this.readyState == 4 && this.status == 200) {
                                document.getElementById("noticeplace").innerHTML = this.responseText;
                            }
                        };

                        xhr.send();
                    }

                </script>
            
        </div>
    </div>
   

</body>
</html>