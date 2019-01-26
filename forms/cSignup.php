<?php
include_once "../includes/db.php";
session_start();
// Store the data from the form by checking if it was filled if not return in the error in the url
if((isset($_POST['fName']) && $_POST['fName']==="")){
    header("Location: ../cSignup.php?error=empty");
    exit();
}
if((isset($_POST['lName']) && $_POST['lName']==="")){
    header("Location: ../cSignup.php?error=empty");
    exit();
}
if((isset($_POST['username']) && $_POST['username']==="")){
    header("Location: ../cSignup.php?error=empty");
    exit();
}
if((isset($_POST['email']) && $_POST['email']==="")){
    header("Location: ../cSignup.php?error=empty");
    exit();
}
if((isset($_POST['password']) && $_POST['password']==="")){
    header("Location: ../cSignup.php?error=empty");
    exit();
}
// if every field was set store each into variables
$first_name=mysqli_real_escape_string($conn,$_POST['fName']);
$last_name=mysqli_real_escape_string($conn,$_POST['lName']);
$username = mysqli_real_escape_string($conn,$_POST['username']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
// Hashing the password
$password = password_hash($password,PASSWORD_DEFAULT);
// Query to search for the user first
$query1 = "SELECT * FROM consumers WHERE username='$username' OR email='$email';";
// Query to add the user
$query2 = "INSERT INTO consumers(first_name,last_name,username,email,pass) VALUES ('$first_name','$last_name','$username','$email','$password');";
if(mysqli_num_rows(mysqli_query($conn,$query1))>0){
    // if the user exists set error as the user exists
    header("Location: ../cSignup.php?error=exists");
    exit();
} else {
    // if not in the database then put it in
    mysqli_query($conn,$query2);
    $_SESSION['email']=$email;
    $_SESSION['username']=$username;
    $_SESSION['first_name']=$first_name;
    $_SESSION['last_name']=$last_name;
    $_SESSION['type'] = "consumer";
    header("Location: ../index.php");
    exit();
}
