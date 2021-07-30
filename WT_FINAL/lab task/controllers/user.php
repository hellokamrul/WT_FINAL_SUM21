<?php

    include 'models/db_config.php';
    
    $name="";
    $err_name="";

    $uname="";
    $err_uname="";
	
    $upass="";
    $err_upass="";

    $err_db="";

    $hasError=false;

    
    if (isset($_POST["login"])){
        if(empty($_POST["username"])){
            $hasError=true;
            $err_uname="User Name Required";
        }
        else{
            $uname=$_POST["username"];
        }

        if(empty($_POST["password"])){
            $hasError=true;
            $err_upass="Password Required";
        }
        else{
            $upass=$_POST["password"];
        }

        if(!$hasError){
          if (!authenticateUser($uname,$upass)){
              header("location: dashboard.php");
          }
          $err_db="Username password invalid";  
        }

    }

    function authenticateUser($uname,$upass){
        $query="select * from admin where username='$uname' and password='$upass'";
        $rs=get($query);
        if(count($rs)>0){
            return true;
        }
        return false;
    }
?>



