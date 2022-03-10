<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="style.css" rel="stylesheet">
    <title>Sign up</title>
    
    <?php include 'links.php' ?>
  </head>
  <body>  
<div class="container mb-3 col-md-6">
  <h1 class="text-center" style="color: white; text-align:center;">Sign Up</h1>
  <form action="" method="POST">
    <label for="usrname"></label>
    <input type="email" id="usrname" name="usrname" required placeholder="Username">

    <label for="psw"></label>
    <input type="password" id="psw" name="psw" pattern="(?=.\d)(?=.[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required placeholder="Password">
    <p>&nbsp;</p>
    <input type="submit" name="submit" value="Sign Up">
    <div class="container mb-3 col-md-6" id="message">
    <h6>Password must contain the following:</h6>
    <p id="letter" class="invalid"><small>A lowercase letter</small></p>
    <p id="capital" class="invalid"><small>A capital (uppercase) letter</small></p>
    <p id="number" class="invalid"><small>A number</small></p>
    <p id="length" class="invalid"><small>Minimum 8 characters</small></p>
    </div>
  </form>
</div>

				
<script >
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

  </body>
</html>



<?php

include 'connection.php';

if(isset($_POST['submit'])){

  $username = $_POST['usrname'];
  $password = $_POST['psw'];

  $sql = " insert into records(username,password) values ('$username','$password') ";

  $result = mysqli_query($con, $sql);
  
  if($result)
  {
    ?>
    <script>
      alert("Sign Up Successfully");
    </script>
    <?php
  }else{
    ?>
    <script>
      alert("Try Again");
    </script>
    <?php
  }
}

?>