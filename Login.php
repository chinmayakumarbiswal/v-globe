<?php
session_start();
include("mylogin.php");
//contribute by Chinmaya Kumar Biswal
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
    <title>Category</title>
    <link rel="stylesheet" href="styleLogin.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <nav>
      <div class="logo">
<h1><span style="color: #05abe0">V</span>-GL<i class="fa fa-globe" aria-hidden="true"></i>BE</h1></div>
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
<li><a href="index.html">Home</a></li>
<li><a  href="Catagory.html">Category</a></li>
<li><a href="Blog.html">BLOG</a></li>
<li><a class="active" href="#">LOGIN/SIGNUP</a></li>
<li><a href="Enquiry.php">Feedback</a></li>
</ul>
</nav>
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">
Login Form</div>
<div class="title signup">
Signup Form</div>
</div>
<div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab">
</div>
</div>
<div class="form-inner">
          <form action="#" class="login" method="post">
            <div class="field">
              <input type="text" placeholder="Email Address" required name="inmail">
            </div>
<div class="field">
              <input type="password" placeholder="Password" required name="inpass">
            </div>
<div class="pass-link">
<a href="#">Forgot password?</a></div>
<div class="field btn">
              <div class="btn-layer">
</div>
<input type="submit" value="Login" name="inlog">
            </div>
<div class="signup-link">
Not a member? <a href="">Signup now</a></div>
</form>
<form action="#" class="signup" method="post">
            <div class="field">
              <input type="text" placeholder="Email Address" required name="samail">
            </div>
<div class="field">
              <input type="password" placeholder="Password" required name="sapass">
            </div>
<div class="field">
              <input type="password" placeholder="Confirm password" required name="newpass">
            </div>
<div class="field btn">
              <div class="btn-layer">
</div>
<input type="submit" value="Signup" name="sain">
            </div>
</form>
</div>
</div>
</div>
<script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
    </script>

  </body>
</html>
