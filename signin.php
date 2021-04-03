<?php


if(isset($_POST['username'])){

    $server="localhost";
    $username="root";
    $password="";
    $con=mysqli_connect($server,$username,$password,);
    if(!$con){
        die("connection to this database failed due to" .mysqli_connect_error());
    }
        if (isset($_POST['username'])){
            $user=$_POST['username'];
        }else {
            $user=NULL;
        }
        if (isset($_POST['password'])){
            $pass=$_POST['password'];
        }else {
            $pass=NULL;
        }

        $mail=$_POST['username'];
        $pass=$_POST['password'];
        mysqli_select_db($con,'medic');

        
        //$sql="SELECT * from `pers` where mail='$mail' and pass='$pass'";
       
        $s="select * from pers where mail = '$mail' && pass= '$pass'";
        $result=mysqli_query($con,$s);
        $numb=mysqli_num_rows($result);

        if($numb==1){
            header('form.php');
            echo"success";
        }
        else{
            header('signin1.php');
            echo"failure";
        }
    }



        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Sign In</title>
        </head>
        <body>
        <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>


        <form action="" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" >
                <span class="invalid-feedback"></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control ">
                <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="signup.php">Sign up now</a>.</p>
        </form>
        </div>
            
        </body>
        </html>