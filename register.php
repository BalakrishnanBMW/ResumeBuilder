<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register New User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="container w-50 p-4 mt-5 border" id="signup-container">
            <div class="container text-center btn-group my-5">
                <a href="" class="btn btn-primary">Sign Up</a>
                <a href="sign.php" class="btn btn-secondary">Sign In</a>
            </div>
            <form action="" method="post">
                <div class="form-group">
                    <label for="signup-mail">Mail Id</label>
                    <input type="text" class="form-control mb-3" id="signup-mail" name="signup-mail" placeholder="Mail Id">
                </div>
                <div class="form-group">
                    <label for="signup-pass">Password</label>
                    <input type="password" class="form-control mb-3" id="signup-pass" name="signup-pass" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="signup-cpass">Confirm Password</label>
                    <input type="password" class="form-control mb-3" id="signup-cpass" name="signup-cpass" placeholder="Confirm Password">
                </div>
                <button type="submit" name="register" class="m-auto d-block w-50 btn my-3 btn-success">Sign Up</button>
            </form>
        </div>
    </div>

    <?php
        include ("dbconfig.php");

        if (isset($_POST['register']))
        {
            $signupMail = $_POST["signup-mail"];
            $signupPass = $_POST["signup-pass"];
            $signupCPass = $_POST["signup-cpass"];

            if ($signupPass == $signupCPass)
            {
                $query1 = "INSERT INTO password_manager (email, passwrd) VALUES ('$signupMail', '$signupPass')";
                if (mysqli_query($db, $query1))
                {
                    $_SESSION["userid"] = $signupMail;
                    header("location:profileform.php");
                }
                else
                {
                    echo "Hmm, Something went wrong";
                }
            }

        }
    ?>

</body>
</html>