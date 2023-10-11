<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | welcome Back</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">    
        <div class="container w-50 p-4 mt-5 border" id="signin-container">
            <div class="container text-center btn-group my-5">
                <a href="register.php" class="btn btn-secondary">Sign Up</a>
                <a href="" class="btn btn-primary">Sign In</a>
            </div>
            <form action="" method="post">
                <div class="form-group">
                    <label for="signin-mail">Mail Id</label>
                    <input type="text" class="form-control mb-3" id="signin-mail" name="signin-mail" placeholder="Mail Id">
                </div>
                <div class="form-group">
                    <label for="signin-pass">Password</label>
                    <input type="password" class="form-control mb-3" id="signin-pass" name="signinpass" placeholder="Password">
                </div>
                <button type="submit" name="loging" class="m-auto w-50 d-block btn my-3 btn-success">Sign In</button>
            </form>
        </div>
    </div>

    <?php
        include ("dbconfig.php");

        if (isset($_POST['loging']))
        {       
            $signinMail = mysqli_real_escape_string($db, $_POST['signin-mail']);
            $signinPass = mysqli_real_escape_string($db, $_POST['signinpass']);

            $query1 = "SELECT * from password_manager WHERE email='$signinMail' and passwrd='$signinPass'";
            $result = mysqli_query($db, $query1);
            $row = mysqli_fetch_assoc($result);
            $count = mysqli_num_rows($result);

            if($count==1)
            {
                echo "Successfully Logged in";
                $_SESSION["userid"] = $signinMail;
                header("location:profile.php");
            }
            else
            {
                echo "User not found <a href=''>signup</a> here";
            }
        }
    ?>

</body>
</html>