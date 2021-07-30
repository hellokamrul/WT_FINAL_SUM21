<?php
 include 'models/db_config.php';
 $name="";
 $err_name="";
 $dob="";
 $err_dob="";
 $credit="";
 $err_credit="";
 $cgpa="";
 $err_cgpa="";
 $dept="";
 $err_dept="";
 

 $err_db="";

 $hasError=false;
if(isset($_POST["add"])){
    if(empty($_POST["name"])){
        $hasError=true;
        $err_cname="Name Required";
    }
    else{
        $name=$_POST["name"];
    }
	if(empty($_POST["dob"])){
        $hasError=true;
        $err_dob="DOB Required";
    }
    else{
        $dob=$_POST["dob"];
    }
	if(empty($_POST["credit"])){
        $hasError=true;
        $err_credit="Credit Required";
    }
    else{
        $credit=$_POST["credit"];
    }
	if(empty($_POST["cgpa"])){
        $hasError=true;
        $err_cgpa="CGPA Required";
    }
    else{
        $cgpa=$_POST["cgpa"];
    }
	if(empty($_POST["dept"])){
        $hasError=true;
        $err_dept="Department Id Required";
    }
    else{
        $dept=$_POST["dept"];
    }
    if(!$hasError){
        $rs=insertStudents($name,$dob,$credit,$cgpa,$dept);
        if ($rs===true){
            header("location: all_students.php");
        }
      }
 }
 function insertStudents($name,$dob,$credit,$cgpa,$dept){
     $query="insert into student values (NULL, '$name','$dob','$credit','$cgpa','$dept')";
     return execute($query);
 }

 function getAllStudents(){
     $query="select * from student";
     $rs=get($query);
     return $rs;
 }
?>