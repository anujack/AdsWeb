<?php
session_start();
include_once "../includes/db.php";
// Check if username and password is set
if(!isset($_POST['username'])){
    header("Location: ../Login.php?login=error");
    exit();
}
if(!isset($_POST['password'])){
    header("Location: ../Login.php?login=error");
    exit();
}
// Store the form data
$email_or_username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$type = mysqli_real_escape_string($conn,$_POST['type']);
// check which type of user
if ($type == "consumer") { // if it is a consumer
    // query to check for the user
    $query = "SELECT * FROM consumers WHERE email='$email_or_username' OR username='$email_or_username';";
} else if ($type == "retailer") { // if it is a retailer
    // query to check for the user
    $query = "SELECT * FROM producers WHERE email='$email_or_username' OR username='$email_or_username';";
} else {
    // Verification failed
    header("Location: ../Login.php?login=error");
    exit();
}
// Collect the rows with the username and password
$row = mysqli_fetch_assoc(mysqli_query($conn,$query));
// If user exists throw error
if(mysqli_num_rows(mysqli_query($conn,$query)) <= 0) {
    header("Location: ../Login.php?login=error");
    exit();
} else {
    // Verify Password
    $row = mysqli_fetch_assoc(mysqli_query($conn,$query));
    if(password_verify($password,$row['pass']) && ($type == "consumer")){ // creating a session for consumer
        $_SESSION['email']=$row['email'];
        $_SESSION['username']=$row['username'];
        $_SESSION['first_name']=$row['first_name'];
        $_SESSION['last_name']=$row['last_name'];
        $_SESSION['type'] = "consumer";
        header("Location: ../index.php?login=success");
    } else if (password_verify($password,$row['pass']) && ($type == "retailer")) {
        $_SESSION['email']=$row['email'];
        $_SESSION['username']=$row['username'];
        $_SESSION['name']=$row['name'];
        $_SESSION['address']=$row['address'];
        $_SESSION['type'] = "producer";
        header("Location: ../index.php?login=success");
    } else {
        // Verification failed
        header("Location: ../Login.php?login=error");
        exit();
    }    
}