<?php

include "connect.php";
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $roll_num=$_POST["roll_num"];
    $phone_num=$_POST["phone_num"];
    $dep_id=$_POST["dep_id"];
    $stu_id=$_POST["stu_id"];
    $password=$_POST["password"];
    $user_type=$_POST["user_type"];

    $sql="insert into `studentstable` (stu_id,name,email,roll_num,phone_num,dep_id,password,user_type)
    values('$stu_id','$name','$email','$roll_num','$phone_num','$dep_id','$password','$user_type')";
    $result=mysqli_query($data,$sql);
    if($result){
        echo "";
    }
    else{
        die(mysqli_error($data));
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url("addstu.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: 100% 100%;
            
        }
        .form{
            
            background-color: whitesmoke;
            height: 620px;
            width: 500px;
            margin-top:3%;
            padding : 50px;
            border-radius: 5%;
            
            
        }
        h3{
            margin-bottom: 20px;
        }
        
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<button type="button" class="btn btn-light" ><a href="adminhomepage.php" style="text-decoration:none;" class="text-dark">back</a></button>
    <center>
        <div class="form">
            <h3 class="mb-4">student details</h3>
            <form action="" method="POST"class="inner">
                <center>
                
            <input class="form-control rounded-3 mb-3" type="text" placeholder="enter name" name="name">
            </center>
            <center>
                
                <input class="form-control rounded-3 mb-3"type="text" placeholder="enter email" name="email">
                </center>
                <center>
                
                <input class="form-control rounded-3 mb-3"type="text" placeholder="enter rollnum" name="roll_num">
            </center>
               <center>
                
            <input class="form-control rounded-3 mb-3"type="text" placeholder="enter phone_num" name="phone_num">
            </center>
            <center>
                
                <input class="form-control rounded-3 mb-3"type="text" placeholder="enter Dep_Id" name="dep_id">
                </center>
                <center>
                
                <input class="form-control rounded-3 mb-3"type="text" placeholder="enter SID" name="stu_id">
                </center>
            <center>
                
                <input class="form-control rounded-3 mb-3"type="text" placeholder="enter password" name="password">
                </center>
                <center>
                
                <input class="form-control rounded-3 mb-3"type="text" placeholder="enter user_type" name="user_type">
                </center>
            <button type="submit" class="btn btn-success mt-3" name="submit">add student</button>

            </form>


        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>