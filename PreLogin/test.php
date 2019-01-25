<!DOCTYPE html>
<html>
<title>Offers</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Food</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
  <a href ="../login.php" onclick="w3_close()" class="w3-bar-item w3-button">Login</a> 
  <a href ="../Signup.php" onclick="w3_close()" class="w3-bar-item w3-button">Sign Up</a>
</nav>

<!-- Top menu just for fun-->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-right w3-padding-16">Mail</div>
    <div class="w3-center w3-padding-16">My Food</div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="../images/walmart.jpg" alt="Walmart" style="width:100%">
      <h3>Add text here</h3>
      <p>Add text here.</p>
    </div>
    <div class="w3-quarter">
      <img src="../images/lotsa.png" alt="Lotsa" style="width:100%">
      <h3>Add text here</h3>
      <p>Add text here</p>
    </div>
    <div class="w3-quarter">
      <img src="../images/dominos.png" alt="Dominos" style="width:100%">
      <h3>Add text here</h3>
      <p>Add text here</p>
    </div>
    <div class="w3-quarter">
      <img src="../images/bed_bath.jpg" alt="Bed Bath and Beyond" style="width:100%">
      <h3>Add text here</h3>
      <p>Add text here</p>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="../images/MAINSTORE.jpg" alt="University Bookstore" style="width:100%">
      <h3>Add text here</h3>
      <p>Add text here</p>
    </div>
    <div class="w3-quarter">
      <img src="../images/pizzahut.jpg" alt="Pizza Hut" style="width:100%">
      <h3>Add text here</h3>
      <p>Add text here</p>
    </div>
    <div class="w3-quarter">
      <img src="../images/tacobell.jpeg" alt="Taco Bell" style="width:100%">
      <h3>Add text here</h3>
      <p>Add text here</p>
    </div>
    <div class="w3-quarter">
      <img src="../images/amazon.png" alt="Amazon" style="width:100%">
      <h3>Add text here</h3>
      <p>Add text here</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  
  <hr id="about">

  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center">  
    <h3>About Us, The Advertisement Company</h3><br>
    <img  alt="Me" class="w3-image" style="display:block;margin:auto" width="800" height="533">
    <div class="w3-padding-32">
      <h4><b>This is who we are!</b></h4>
      <h6><i>Your'e company can be succesful if you ise our code</i></h6>
      <p>Just some text here</p>
    </div>
  </div>
  <hr>
  
  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p>some more text</p>
      <!-- <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p> -->
    </div>
  
    <!-- <div class="w3-third">
      <h3>BLOG POSTS</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="/w3images/workshop.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Lorem</span><br>
          <span>Sed mattis nunc</span>
        </li>
        <li class="w3-padding-16">
          <img src="/w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Ipsum</span><br>
          <span>Praes tinci sed</span>
        </li> 
      </ul>
    </div> -->

    <div class="w3-third w3-serif">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Pizza</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Drinks</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Shopping</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">dummy</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">dummy</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">dummy</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">dummy</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">dummy</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">dummy</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">dummy</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">dummy</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">dummy</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">dummy</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">dummy</span>
      </p>
    </div>
  </footer>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
