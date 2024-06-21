<?php
error_reporting(0);
session_start();
$host="localhost";
$user="root";
$password="";
$dbname="result_management";

$data=mysqli_connect($host,$user,$password,$dbname);

if($data===false)
{
    die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$stu_id=$_POST['stu_id'];
$pass=$_POST['password'];

$sql="select * from `studentstable` where stu_id='".$stu_id."' AND password='".$pass."'";
$result=mysqli_query($data,$sql);

$row=mysqli_fetch_array($result);
$_SESSION["stu_id"]=$row["stu_id"];
$_SESSION["user_type"]=$row["user_type"];

if($row["user_type"]=="student")
{

    header("location:studentresult.php");
}
elseif($_SESSION["user_type"]=='admin')
{
 header('location:studentlogin.php');
}

else
{
    session_start();
    $message= "student id or password is wrong";
    $_SESSION["loginmessage"]=$message;
    
    header("location:studentlogin.php");
}
  }
?>


