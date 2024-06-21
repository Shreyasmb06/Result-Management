<?php
session_start();
error_reporting(0);
if(!isset($_SESSION["stu_id"]))
{
    header("location:studentlogin.php");
}
elseif($_SESSION["user_type"]=="admin")
{
    header("location:studentlogin.php");
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
            padding-inline: 23%;
            padding-top: 8%;
            
        }
        div{
            height: 100%;
            
            
            
        }
        
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body >
    <center><h2 class="mb-5">your result</h2></center>
    
    <div class="container-fluid">
      <?php
      include "connect.php";

      $stu_id=$_SESSION["stu_id"];
      $sql="select * from `studentstable` where stu_id='$stu_id'";
      $result=mysqli_query($data,$sql);
      
      if($result){
        while($row=mysqli_fetch_assoc($result)){
          $name=$row["name"];
          $roll=$row["roll_num"];
        echo '
        <p><b>name:</b> '.$name.'</p>
    <p><b>roll no:</b> '.$roll.'</p>
    
        ';
      }
      }
      else{
        die( mysqli_error($data));
      }
      
      ?>
    
<table class="table table-bordered border-dark my-5 " >
  <thead>
    <tr>
      
      <th scope="col">course</th>
      <th scope="col">marks</th>
      
    </tr>
  </thead>
  <tbody>
  <?php

include "connect.php";

$stu_id=$_SESSION["stu_id"];
$sql="select * from `result` where stu_id='$stu_id'";
$result=mysqli_query($data,$sql);

if($result){
  while($row=mysqli_fetch_assoc($result)){
    $course=$row["course_id"];
    $marks=$row["marks"];
  echo '<tr>
  
  <td scope="row">'.$course.'</td>
  <td scope="row">'.$marks.'</td>
  
</tr>';
}
}
else{
  die( mysqli_error($data));
}
?>
    <tr >
      
      <td colspan="3" class="text-center"><img src="printer.svg" alt="" width="30px" id="printer"></td>
      

      
    </tr>
  </tbody>
</table>
</div>

<script>
  document.getElementById("printer").addEventListener("click", function () {
    window.print();
  });
  
</script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>