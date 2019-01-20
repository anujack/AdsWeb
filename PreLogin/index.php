<?php
// Check if the user is already logged in
if(isset($_SESSION['username'])){
    // redirect to home if logged in
    header("Location: ../index.php");
    exit();
}
$root="http://localhost:8080/aw";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <a href="./Login.php">Login</a><br><br>
    <a href="./Signup.php">SignUp</a>
</body>
</html>