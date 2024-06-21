<?php
error_reporting(0);
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
$email=$_POST['email'];
$pass=$_POST['password'];

$sql="select * from admin where email='".$email."' AND password='".$pass."'";
$result=mysqli_query($data,$sql);

$row=mysqli_fetch_array($result);

if($row["user_type"]=="admin")
{
    header("location:adminhomepage.php");
}

else
{
    echo "email or password is wrong";
}
  }


?>
