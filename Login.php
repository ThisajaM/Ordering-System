<?php

include 'conn.php';

if (isset($_POST["login"])) {
    
    $username = $_POST["Username"];
    $password = $_POST["Password"];

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM Accounts WHERE UName = '$username' AND Passw = '$password'";  
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       
        header("Location: LoginHome.html");
        
    } else {
        
        echo"<script>alert('Incoreect Username & Password');</script>";
    }

    $conn->close();
}
?>

<html>
<head>
    <script type="Text/javascript" src="Validate.js"></script>
    <link rel= "stylesheet" type="text/css" href="Style.css">
    <title>Login</title>    
</head>
<body>
<div class="containar">
    <a href="Home.html">
    <img src="Embark.jpg" class="logo">
    </a>
</div>
    <div class="container">
        
        <h2>User Login</h2>
        <form method="post" name="Login" onsubmit="return ValidateLogin()">
            <label for="Username">Username :</label>
            <input type="text" name="Username">

            <label for="Password">Password :</label>
            <input type="password" name="Password">

            <button type="submit" name="login">LOGIN</button>
        </form>

        <div class="switch-page">
            Don't have an account? <a href="CreateAcc.html">Create an account</a>.
        </div>
    </div>
</body>
</html>
