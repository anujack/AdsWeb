<!DOCTYPE html>
<html>

<head>
  <title>Our Company</title>
  <link href="../styles/prelogin.css" rel="stylesheet">
</head>

<body>

<div id="main">
  <h1>Welcome to The World of Offers</h1> 
  <h2>Web Site Main Ingredients:</h2>
  <button id="login" class="button" >Login</button>

<script type="text/javascript">
    document.getElementById("login").onclick = function () {
        location.href = "../login.php";
    };
</script>
<button id="signup" class="button" >Signup</button>

<script type="text/javascript">
    document.getElementById("signup").onclick = function () {
        location.href = "../login.php";
    };
</script>
<!-- <p><a href = "../signup.php">Signup</a></p> -->
</div>

</body>
</html> 