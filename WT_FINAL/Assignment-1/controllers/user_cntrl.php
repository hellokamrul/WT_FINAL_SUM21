<?php

    include 'models/db_config.php';
    
    $name="";
    $err_name="";

    $uname="";
    $err_uname="";

    $uemail="";
    $err_uemail="";

    $upass="";
    $err_upass="";

    $err_db="";

    $hasError=false;

    if(isset($_POST["signup"])){
        if(empty($_POST["name"])){
            $hasError=true;
            $err_name="Name Required";
        }
        else{
            $name=$_POST["name"];
        }

        if(empty($_POST["username"])){
            $hasError=true;
            $err_uname="User Name Required";
        }
        else{
            $uname=$_POST["username"];
        }

        if(empty($_POST["email"])){
            $hasError=true;
            $err_uemail="Email Required";
        }
        else{
            $uemail=$_POST["email"];
        }

        if(empty($_POST["password"])){
            $hasError=true;
            $err_upass="Password Required";
        }
        else{
            $upass=$_POST["password"];
        }

        if(!$hasError){
            $rs=insertUser($name,$uname,$uemail,$upass);
            if($rs===true){
                header("location: login.php");
            }
            $err_db=$rs;
        }
    }
    elseif (isset($_POST["login"])){
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

    function insertUser($name,$uname,$uemail,$upass){
        $query="insert into users values (NULL,'$name','$uname','$uemail','$upass')";
        return execute($query);
    }

    function authenticateUser($uname,$upass){
        $query="select * where u_name='$uname' and password='$upass'";
        $rs=get($query);
        if(count($rs)>0){
            return true;
        }
        return false;
    }
?>



