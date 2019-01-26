<?php
    session_start();
    // checking for which type of user
    if ($_SESSION['type']==="consumer") { // if consumer
        header("Location: ./Consumer/profile.php");
    } else if($_SESSION['type']==="producer") {
        header("Location: ./Producer/profile.php");
    }