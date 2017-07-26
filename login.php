<?php
/*
 * login.php
 * 
 * Copyright 2017 raja <raja@raja-Inspiron-N5110>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['uname']);
      $mypassword = mysqli_real_escape_string($db,$_POST['psw']); 
      
      $sql = "SELECT * FROM Users WHERE Username = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['login_user'] = $myusername;
         
         header("location: usersearch.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
<head>
	<title>PwC</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/socialbuttons.css">
  
</head>
<style>
/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}
/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}
</style>
<body style="height: 100%">
<nav class="navbar navbar-toggleable-md navbar-light bg-nav-color">
  <a class="navbar-brand font-white" href="https://www.pwc.in/">PwC Search Engine</a>
  <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <a class="nav-item nav-link font-white" style="border-right: 1px solid black;" href="#">Reports</a>
        <a class="nav-item nav-link font-white" href="#">Admin</a>
    </ul>
  </div> -->
</nav>
<form class="modal-content animate" action="" method = "post">
<div class="container">
  <div class="row mt-4">
    <div class="col-12">
      <h1><center>FIND YOUR ID</center></h1>
    </div>    
  </div>
  <hr/>
  <div class="row">
    <div class="col-6" style="border-right: 0.1px solid #618A9E;">
      <div class="row">
        <div class="col-12">
          <p>Please sign in to continue</p>
        </div>
        <div class="col-12">
          <div class="input-group mb-2">
            <span class="input-group-addon" id="email-field"><span class="fa fa-user" aria-hidden="true"></span></span>
            <input type="text" class="form-control" placeholder="email" name="uname" aria-describedby="email-field">
          </div>    
        </div>
        <div class="col-12">
          <div class="input-group">
            <span class="input-group-addon" id="pwd-field"><span class="fa fa-lock" aria-hidden="true"></span></span>
            <input type="password" class="form-control" placeholder="********" name="psw" aria-describedby="pwd-field">
          </div>    
        </div>
        <div class="col-6">
            <label><input type="checkbox"> Remember me</label>
        </div>
        <div class="col-6 text-right">
          <p style="color:#618A9E;">Forgot password?</p>
        </div>
        <div class="col-12">
          <button class="btn report-btn-color btn-lg" style="width: 100%;">Sign in</button>
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="row">
        <div class="col-12 ">
          <p>Use your social media accounts</p>
          <button class="btn btn-block btn-social btn-google btn-lg font-white">
            <span class="fa fa-google"></span>
            Sign in with Google
          </button>
          <button class="btn btn-block btn-social btn-facebook btn-lg font-white">
            <span class="fa fa-facebook"></span>
            Sign in with Facebook
          </button>
          <button class="btn btn-block btn-social btn-twitter btn-lg font-white">
            <span class="fa fa-twitter"></span>
            Sign in with Twitter
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
