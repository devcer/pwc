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
<!DOCTYPE html>
<html>
<head>
	<title>PwC</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-toggleable-md navbar-light bg-nav-color">
  <a class="navbar-brand font-white" href="https://www.pwc.in/">PwC Search Engine</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <a class="nav-item nav-link font-white" style="border-right: 1px solid black;" href="dashboard.html">Reports</a>
        <a class="nav-item nav-link font-white" href="AdminLogin.php">Admin</a>
    </ul>
  </div> 
</nav>

<div class="container">
	<div class="row mt-4">
		<div class="col-md-12">
		<h1><center>FIND YOUR ID</center></h1>
		</div>
	</div>
	<hr>
	<div class="row highlight-div">
		<div class="col-md-9">
			<h2>Which website would you like us to check</h2>	
			<label for="website-url">Example of valid url</label>
			<div class="input-group input-group-lg">
			<input type="text" class="form-control" id="website-url" method="post" placeholder="http://" name="upl" action="upload.php">
			<span class="fa fa-times wrong-color fa-3x" aria-hidden="true"></span>
			</div>
			<div class="drop-csv-div mt-2" id="upload-url">
				<center>
				<p class="drop-csv-text my-2">
					<span class="fa-stack">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-cloud-upload fa-stack-1x fa-inverse"></i>
					</span>&nbsp; Drop .csv file here
				</p>
				</center>
			</div>
			<input type="file" id="upload-url-action" method="post" name="upl" action="upload.php">
			<p class="text-danger">Please enter a valid url. eg: http://www.google.com</p>		
		</div>
	</div>
	<div class="row highlight-div">
		<div class="col-md-9">
			<h2>Provide your Unique ID</h2>	
			<label for="card-number">Please provide only govt issued IDs</label>
			<div class="input-group input-group-lg">
			<input type="text" class="form-control" id="card-number" method="post" placeholder="Enter card number here" name="upl" action="upload.php">	
			<span class="fa fa-check correct-color fa-3x" aria-hidden="true"></span>
			</div>

			<div class="drop-csv-div mt-2" id="upload-id">
				<center>
				<p class="drop-csv-text my-2">
					<span class="fa-stack">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-cloud-upload fa-stack-1x fa-inverse"></i>
					</span>&nbsp; Drop .csv file here
				</p>
				</center>
			</div>
			<input type="file" id="upload-id-action" name="upl" action="upload.php">	
		</div>
	</div>
	<div class="row mb-2">
		<div class="col-md-12">
			<div class="error-full-line"><h1>Please correct the error above and re-submit!<h1></div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center">
			<button class="btn btn-default report-btn-color report-btn-size"><strong>Generate Report</strong></button>
		</div>
	</div>

</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/angular.min.js"></script>
<script type="text/javascript" src="app.js"></script>
</body>
</html>
