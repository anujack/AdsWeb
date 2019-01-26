<?php
include_once "../includes/db.php";
session_start();
// Store the data from the form by checking if it was filled if not return in the error in the url
if((isset($_POST['fName']) && $_POST['fName']==="")){
    header("Location: ../Signup.php?error=empty");
    exit();
}
if((isset($_POST['lName']) && $_POST['lName']==="")){
    header("Location: ../Signup.php?error=empty");
    exit();
}
if((isset($_POST['username']) && $_POST['username']==="")){
    header("Location: ../Signup.php?error=empty");
    exit();
}
if((isset($_POST['email']) && $_POST['email']==="")){
    header("Location: ../Signup.php?error=empty");
    exit();
}
if((isset($_POST['password']) && $_POST['password']==="")){
    header("Location: ../Signup.php?error=empty");
    exit();
}
// if every field was set store each into variables
$name=mysqli_real_escape_string($conn,$_POST['name']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$username = mysqli_real_escape_string($conn,$_POST['username']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
// Hashing the password
$password = password_hash($password,PASSWORD_DEFAULT);
// Query to search for the user first
$query1 = "SELECT * FROM producers WHERE username='$username' OR email='$email';";
// Query to add the user
$query2 = "INSERT INTO producers(name,address,username,email,pass) VALUES ('$name','$address','$username','$email','$password');";
if(mysqli_num_rows(mysqli_query($conn,$query1))>0){
    // if the user exists set error as the user exists
    header("Location: ../Signup.php?error=exists");
    exit();
} else {
    // if not in the database then put it in
    mysqli_query($conn,$query2);
    $_SESSION['email']=$email;
    $_SESSION['username']=$username;
    $_SESSION['name']=$name;
    $_SESSION['address']=$address;
    $_SESSION['type'] = "producer";
    header("Location: ../index.php");
    exit();
}
