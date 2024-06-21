<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body{
            background-image: url("dashboard.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: 100% 100%;
        }
        
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="adminhomepage.css">
</head>
<body>
    
    <nav>
        <label for=""class="nav_name">Admin Dashboard</label>
        <ul>
            <li class="logout"><button class="btn btn-outline-danger bg-light" style="margin-top:-120px"><a href="index.php">logout</a></button>  </li>
        </ul>
    </nav>
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px; height:100vh; " id="side_bar">
    
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item" style="margin-top:50px;">
        <a href="addstudent.php" class="nav-link text-white" aria-current="page">
          add student
        </a>
      </li>
      <li>
        <a href="addresult.php" class="nav-link text-white">
          
          add result
        </a>
      </li>
      <li>
        <a href="editresult.php" class="nav-link text-white">
          
          edit result
        </a>
      </li>
      <li>
        <a href="delete.php" class="nav-link text-white">
          
          delete student
        </a>
      </li>
      
    </ul>
    <hr>
    
  </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>