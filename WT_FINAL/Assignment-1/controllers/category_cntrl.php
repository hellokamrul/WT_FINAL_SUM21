<?php
 include 'models/db_config.php';
 $cname="";
 $err_cname="";
 $err_db="";

 $hasError=false;
 if(isset($_POST["add"])){
    if(empty($_POST["cat"])){
        $hasError=true;
        $err_cname="Name Required";
    }
    else{
        $cname=$_POST["cat"];
    }
    if(!$hasError){
        $rs=insertcategory($cname);
        if ($rs===true){
            header("location: all_categories.php");
        }
      }
 }

 if(isset($_POST["edit"])){
    if(empty($_POST["cat"])){
        $hasError=true;
        $err_cname="Name Required";
    }
    else{
        $cname=$_POST["cat"];
    }
    if(!$hasError){
        $rs=updatecategory($cnmae,$id);
        if ($rs===true){
            header("location: all_categories.php");
        }
      }
 }

 function insertcategory($cname){
     $query="insert into category values (NULL, '$cname')";
     return execute($query);
 }


 function getAllCategory(){
     $query="select * from category";
     $rs=get($query);
     return $rs;
 }

 function getCategory($id){
     $query="select * from category where id=$id";
     $rs=get($query);
     return $rs[0];
 }

 function updatecategory($cname,$id){
    $query="UPDATE `category` SET `name`='$cname' WHERE id='$id'";
    return execute($query);
}
?>