
<?php session_start();
if(!isset($_SESSION['adminName'])) {
    echo "PLEASE LOG IN AS ADMIN!";
    die();
} 

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin Dashboard</title>
</head>
<body>

    <div class="main-content">


        <?php include 'includes/header.php'; ?>
        <br><br>
        <div style="width: 100%; text-align: center;">
                <span style="color: white; background: #3498db; padding: 4px;">
      
                <?php echo "Welcome, " . $_SESSION['adminName']; ?>
                </span>
            </div>
        <br>

        <div class="content-wrapper">
            <?php if(isset($_COOKIE['recentNotice'])) { ?>
            <div style="width: 100%; text-align: center;">
                <span style="color: white; background: #9b59b6; padding: 4px;">
      
                <?php 
         
                
                    echo "Recent Notice Sent To: " . $_COOKIE['recentNotice'];
                
                 ?>
                </span>
            </div>
            <?php } ?>


          
            <br>   <br>
            <div class="btn-xl-container">
                <div class="btn-xl" onclick="location.href='crud-renter.php'" ><span>Renter/ Rentee</span></div>
                <!-- <div class="btn-xl" onclick="location.href='crud-manager.php'"><span>Manager</span></div> -->

            </div>
            
        </div>
    </div>
   

</body>
</html>