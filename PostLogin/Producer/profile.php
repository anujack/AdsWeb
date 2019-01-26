<?php
    session_start();
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>My Profile</h1>
    <form method="POST" action="../../forms/profile.php">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $_SESSION['name'];?>"><br><br>
        <label>Email</label>
        <label><?php echo $_SESSION['email'];?></label><br><br>
        <label>Username:</label>
        <label><?php echo $_SESSION['username'];?></label><br><br>
        <label>Address</label>
        <input type="text" name="address" value="<?php echo $_SESSION['address'];?>"><br><br>
        <label>Previous Password:</label>
        <input type="password" name="prepassword"><br><br>
        <label>New Password:</label>
        <input type="password" name="newpassword"><br><br>
        <button type="submit">Submit Changes</button>
    </form>
</body>
</html>