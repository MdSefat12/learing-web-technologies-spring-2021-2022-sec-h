<?php
    session_start();

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "" || $password =="")
        {
            echo "null value found......";
        }
        else
        {
            if($_SESSION['username'] == $username &&  $_SESSION['password'] == $password)
            {
                $_SESSION['flag'] = true;
                
                header('location: edit profile.php');
            }
            else
            {
                echo "incorrect user name or pass";
            }
        }
    }
     

?>