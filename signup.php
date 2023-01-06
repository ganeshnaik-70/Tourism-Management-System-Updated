<?php
$con=mysqli_connect('localhost:3307','root','','travel');

if (isset($_POST['signup'])) {
  $firstname=$_POST['fname'];
  $que = "SELECT `fname` FROM `customer` WHERE fname='$firstname'";
  if($que){
    ?>
    <script type="text/javascript">
      alert("username already taken")
    </script>
    <?php
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title> Sign Up Form </title>
  <meta name="viewport" content="width= device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>

<body>
<div class="main">
    <ul>
      <ul class="list">
        <li class="logo"><a href="mainPage.html"><img src="earth-globe.png" alt="Logo" style="width:36px;height:36px"></a></li>
        <div class="search">
            <form method="POST" action="info.php">
              <input type="text" name="search_p" placeholder="Search.." size="50">
          
              <input type="image" name="submit_p" src="search_icon.png" alt="Search image" style="width:22;height:22; margin-left: 35px;">
            </form>
        </div>
      </ul>
      <ul class="list2">
        <li><a href="mainPage.html">Home</a></li>
        <li><a id="long" href="destination.html">Destination</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li class="active-menu"><a href="signup.html">Sign Up</a></li>
        <li><a href="feedback.html">Feedback</a></li>
      </ul>
    </ul>
</div>

  <form from="myForm" action ="save.php" method="POST">

    <div class="login-box">

      <h1> Sign Up </h1>

      <div class="textbox">
        <input type="text" placeholder="Username" id="fname" name="fname" value="" required>  
      </div>

      <div class="textbox">
        <input type="password" placeholder="Password" id="password" name="password" value="" maxlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="password must cantain at least one number and one uppper case and one lowercase letter and 8 characters" required>
      </div>

      <div class="textbox">
        <input type="text" placeholder="Email" id="email" name="email" value="" required pattern="[a-z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-z0-9-]+.[a-z]{2,4}" title="Invalid Email">
      </div>

      <div class="textbox">
        <input type="text" placeholder="City" id="city" name="city" value="" required>
      </div>

      <div class="textbox">
        <input type="text" placeholder="Phone" id="phone" name="phone" value="" required onkeypress="return /[0-9]/i.test(event.key)" maxlength="10" pattern="([0-9]){10,}">
      </div>

      <input class="btn" type="submit" name="" value="Sign Up"> <br> <br>

      <center> <a href="index.html"> Already have an account ? </a> <center>

    </div>
    
  </form>

</body>
</html>
