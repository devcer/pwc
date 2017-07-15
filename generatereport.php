<?php
/*
 * welcome.php
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
include('session.php');
?>
<html>
<head>
	<title>PwC</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/socialbuttons.css">
  
</head>
<body style="height: 100%">
<nav class="navbar navbar-toggleable-md navbar-light bg-nav-color">
  <a class="navbar-brand font-white" href="#">Website name</a>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <a class="nav-item nav-link font-white" style="border-right: 1px solid black;" href="dashboard.php">Reports</a>
        <a class="nav-item nav-link font-white" href="adminLogin.php">Admin</a>
    </ul>
  </div> 
</nav>
<label for="website-link">Enter a valid domain to pull results</label>
<form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
	<div id="drop">
				

				<a>Browse</a>
				<input type="file" name="upl" multiple />
			</div>
 <h2><a href = "logout.php">Sign Out</a></h2>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/angular.min.js"></script>
<script type="text/javascript" src="app.js"></script>
</body>
</html>
