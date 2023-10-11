<?php
session_start();
if(isset($_SESSION["userid"]))
    echo $_SESSION["userid"];
else    
    echo "User not set";
?>

<form action="" method="post">
    <button name="logout" value="logout">
        Log out
    </button>
</form>

<?php
    if(isset($_POST["logout"]))
    {
        unset($_SESSION["userid"]);
        header("location:profileform.php");
    }
?>
