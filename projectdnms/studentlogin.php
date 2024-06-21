
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="studentlogin.css">
<body  id="body">
    <div class="lcontainer" id="div1">
        <div class="login rounded-4 shadow">
            <div class="p-4 pb-4 mb=0">
                <h1 class="fw-bold text-center">Check Results</h1>
            </div>
            <div class="modal-body p-4 pt-0">
                <form  action="login_check.php" method="POST" class="login_form">
                    <div class="form-floating mb-3 ">
                        <input type="number" class="form-control rounded-3 mb-3 " placeholder=""  id="floaintInput" name="stu_id">
                        <label for="floaintInput">student id</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="password" class="form-control rounded-3 mb-3 " placeholder="Password" id="floaintInput" name="password">
                        <label for="floaintInput">Password</label>
                    </div>
                    <button  class="but btn btn-primary lg rounded-3 w-100 mb-2" id="signupButton" name="submit">Get Results </button>
                    <hr>
                    <div class="text-center"><p>Forgot <span style="color: rgb(7, 98, 134);">Password?</span></p>
                        
                    </div>
                    <center>
                    <p id="warning" class="mb-3">
                    <?php
                    error_reporting(0);
                    session_start();    
                    echo $_SESSION["loginmessage"];
                    session_destroy();
                    ?>
                </p>
                </center>
                </form>
            </div>

        </div>

    </div>

    <script src="jquery.js"></script>
    <script src="front.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>