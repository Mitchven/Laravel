<?php
?>

<!DOCTYPE html>
<!-- <html> -->
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login and Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<style>

    body {
        background-color: white;
        font-family: Arial, Helvetica, sans-serif;
    }

    h2 {
        font: 200% Comic;
        color: white ;
        text-align: center;
    }
    input[type=text],[type=password], select {
        width: 100%;
        padding: 12px 20px;
        margin: 12px 0;
        border: 1px solid black;
        border-radius: 4px;
        box-sizing: border-box;
        font: 120% comic;
    }
    
    input[type=submit] {
        width: 20%;
        background-color:skyblue;
        color: black;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font: 120% comic;
    }
    h1 {
        font: 60px comic;
    }

    input[type=submit]:hover {
        background-color: skyblue;
        font: 120% comic;
    }
    
    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }

    b{
        color: black;
        font: 150% comic;
    } 
</style>
<body>
    <div class="form">  
        <center><h1>Register</h1></center> 
        <form action="/register" method="post">
            <label for="fullname"><b>Fullname</b></label>
            <input type="text" id="fname" name="fullname" placeholder="Please enter fullname" required>
            <label for="username"><b>Username</b></label>
            <input type="text" id="uname" name="username" placeholder="Please enter username" required>
            <label for="email"><b>Email Address</b></label>
            <input type="text" id="email" name="email" placeholder="Please enter email" required>
            <label for="pass"><b>Password</b></label>
            <input type="password" id="pass" placeholder="Enter Password" name="pass" required> 
            <center><input type="submit" name="submit" value="Register"/></center>
        </form>  
        <center><p>Already have an account?<a href="/login">Login</a></p></center>  
    </div>
</body>
</html>