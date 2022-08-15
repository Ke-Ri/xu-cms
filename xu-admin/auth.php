<?php
    require_once('../xu-database.php');

    $conn=mysqli_connect($mysql_host, $user, $password, $database);

    if(mysqli_connect_errno($conn))
    {
        echo 'Field Database: '.mysqli_connect_error();
    }
    
    session_start();
    if(isset($_POST['login']))
        {
        if(empty($_POST['username']) || empty($_POST['password']))
        {
            header("location:login.php?Empty= Wypełnij puste pola!");
        }
        else
        {
            $query="select * from xu_user where username='".$_POST['username']."' and password='".$_POST['password']."' ";
            $result=mysqli_query($conn,$query);
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['username'];
                header("location:dashboard.php");
            }
            else
            {
                header("location:login.php?Invalid= Błędne dane logowania!");
            }
        }

    }
    else 
    {
        echo "Błąd Logowania, Skontaktuj się z administratorem!";
    }
?>