<?php

if(isset($_POST['login_submit']))
{
    $username = $_POST["user_name"];
    $userpass = $_POST["user_password"];

    if($username == "uzair" && $userpass == 123)
        {
            echo "welcome $username";
        }
    else
         {
                echo "USERNAME / PASSWORD IS INCORRECT";
         }
}
else
    {
        echo "please fill the form first";
        header("Location: http_methods.php");
    }


?>