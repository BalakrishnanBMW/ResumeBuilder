<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="container text-center mt-5">
            <form action="" name="myforms">
                <div class="form-group">
                    <label class="my-3 p-2 btn btn-primary" id="sign-in-button" for="in">Sign-In</label>
                    <input type="radio" class="form-control" checked onchange="handleChange(this)" hidden name="sign" id="in" value="Sign-In">
    
                    <label class="my-3 p-2 btn  btn-outline-primary" id="sign-up-button" for="up">Sign-Up</label>
                    <input type="radio" class="form-control" onchange="handleChange(this)" hidden name="sign" id="up" value="Sign-Up">
                </div>
            </form>
        </div>
    
        <div class="container w-50 p-4 mt-5 border" id="signin-container">
            <form action="" method="post">
                <div class="form-group">
                    <label for="signin-mail">Mail Id</label>
                    <input type="text" class="form-control mb-3" id="signin-mail" name="signin-mail" placeholder="Mail Id">
                </div>
                <div class="form-group">
                    <label for="signin-pass">Password</label>
                    <input type="password" class="form-control mb-3" id="signin-pass" name="signinpass" placeholder="Password">
                </div>
                <button type="submit" class="m-auto w-50 d-block btn my-3 btn-success">Sign In</button>
            </form>
        </div>

        <div class="container w-50 p-4 mt-5 border" style="display: none;" id="signup-container">
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


    <script>
        const upContainer = document.getElementById("signup-container")
        const inContainer = document.getElementById("signin-container")
        const signInButton = document.getElementById("sign-in-button")
        const signUpButton = document.getElementById("sign-up-button")
        function handleChange(radio)
        {
            if (radio.value == "Sign-In")
            {
                upContainer.style.display = "none";
                inContainer.style.display = "block";
                signInButton.classList.add("btn-primary")
                signInButton.classList.remove("btn-outline-primary")
                signUpButton.classList.remove("btn-primary")
                signUpButton.classList.add("btn-outline-primary")
            }
            else if (radio.value == "Sign-Up")
            {
                inContainer.style.display = "none";
                upContainer.style.display = "block";
                signUpButton.classList.add("btn-primary")
                signUpButton.classList.remove("btn-outline-primary")
                signInButton.classList.remove("btn-primary")
                signInButton.classList.add("btn-outline-primary")
            }
        }
    </script>

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
                mysqli_query($db, $query1);
            }

        }
        if (isset($_POST['loging']))
        {       
            $signinMail = mysqli_real_escape_string($db, $_POST['signin-mail']);
            $signinPass = mysqli_real_escape_string($db, $_POST['signinpass']);

            $query1 = "SELECT * from password_manager WHERE email='$signinMail' and passwrd='$signinPass'";
            $result = mysqli_query($db, $query1);

            // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            // $count = mysqli_num_rows($result);  
            
            // if($count == 1){  
            //     echo "<h1><center> Login successful </center></h1>";  
            // }  
            // else{  
            //     echo "<h1> Login failed. Invalid username or password.</h1>";  
            // }  

            // if ($result)
            // {
            //     $_SESSION['usermail'] = $signinMail;
            //     header("location: profileform.php");
            // }
            // else
            // {
            //     echo "Invalid mail or password";
            // }

        }
    ?>

</body>
</html>