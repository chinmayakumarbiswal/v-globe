<?php
session_start();
include("mylogin.php");
//contribute by Chinmaya Kumar Biswal
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ENQUIRY</title>
    <link rel="stylesheet" href="styleEnquiry.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
      <nav>
      <div class="logo">
<h1><span style="color: #05abe0">V</span>-GL<i class="fa fa-globe" aria-hidden="true"></i>BE</h1></div>
      <ul>
<li><a href="index.html">Home</a></li>
<li><a href="Catagory.html">Category</a></li>
<li><a href="Blog.html">BLOG</a></li>
<li><a href="Login.php">LOGIN/SIGNUP</a></li>
<li><a class="active" href="#">Feedback</a></li>
</ul>
</nav>
    <div class="container">
      <div class="text">
Feedback Form</div>
<form action="#" method="post">
        <div class="form-row">
          <div class="input-data">
            <input type="text" required name="fir">
            <div class="underline">
</div>
<label for="">First Name</label>
          </div>
<div class="input-data">
            <input type="text" required name="las">
            <div class="underline">
</div>
<label for="">Last Name</label>
          </div>
</div>
<div class="form-row">
          <div class="input-data">
            <input type="text" required name="ema">
            <div class="underline">
</div>
<label for="">Email Address</label>
          </div>
<div class="input-data">
            <input type="text" required name="pho" maxlength="10">
            <div class="underline">
</div>
<label for="">Phone No.</label>
          </div>
</div>
<div class="form-row">
          <div class="input-data textarea">
            <textarea rows="8" cols="80" required  name="mess"></textarea> 
            <br />
<div class="underline">
</div>
<label for="">Write your message</label>
          
        
        <br />
<div class="form-row submit-btn">
          <div class="input-data">
            <div class="inner"></div>
            <input type="submit" value="submit" name="feedbtn">
          </div>
        </div>
      </form>
    </div>

  </body>
</html>
