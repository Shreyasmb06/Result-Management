<?php

include "connect.php";
if(isset($_POST["submit"])){
    $sid=$_POST["SID"];
    $course_id=$_POST["course_id"];
    $marks=$_POST["marks"];
    $dep_id=$_POST["dep_id"];
    $sql="select * from studentstable ";

    $sql="update `result`  set marks='".$marks."'
    where stu_id='".$sid."' AND course_id='".$course_id."'";
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
            background-image: url("adminresult.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: 100% 100%;
        }
        .form{
            
            background-color: whitesmoke;
            height: 500px;
            width: 500px;
            margin-top:10%;
            padding : 50px;
            border-radius: 5%;
            animation: ;
            
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
            <h3 class="mb-4">edit result</h3>
            <form action="" method="POST"class="inner">
                <center>
                
            <input class="form-control rounded-3 mb-3" type="text" placeholder="enter sid" name="SID">
            </center>
            <center>
                
                <input class="form-control rounded-3 mb-3"type="text" placeholder="enter course id" name="course_id">
                </center>
                <center>
                
                <input class="form-control rounded-3 mb-3"type="text" placeholder="enter marks" name="marks">
            </center>
               <center>
                
            <input class="form-control rounded-3 mb-3"type="text" placeholder="enter dep_id" name="dep_id">
            </center>
            
            <button class="btn btn-success mt-3" name="submit">edit result</button>

            </form>


        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
    <h1></h1>
</body>
</html>