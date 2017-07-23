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
//$command = escapeshellcmd('/var/www/html/pwc/pdfScraping.py');
//$output = shell_exec($command);
//echo $output;

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
<body ng-app="appModule" ng-controller="userSearchCtrl">
<nav class="navbar navbar-toggleable-md navbar-light bg-nav-color">
  <a class="navbar-brand font-white" href="https://www.pwc.in/">PwC search engine</a>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <a class="nav-item nav-link font-white" style="border-right: 1px solid black;" href="admindashboard.html">Reports</a>
        <a class="nav-item nav-link font-white" href="addadmin.php">Admin</a>
    </ul>
  </div> 
</nav>
<div>
   <h3 align="center" class="userhead">Welcome <?php echo $login_session;?></h3>
 </div>
<div class="container">
	<div class="row mt-4">
		<div class="col-md-12">
		<h1><center>Schedule a search task to check for individual's private data listed on websites</center></h1>
		</div>
	</div>
	<hr>
	<div class="row highlight-div">
		<div class="col-md-9">
			<h2>Enter URL of the website to check individual's unique private data</h2>	
			<label for="website-url">Enter a valid URL</label>
			<div class="input-group input-group-lg">
			<input type="text" class="form-control" id="website-url" placeholder="http://" name="" ng-keyup="websiteUrlKeyup($event)">
			<span class="fa fa-times wrong-color fa-3x" aria-hidden="true" ng-show="enableWebsiteUrlWrong"></span>
			<span class="fa fa-check correct-color fa-3x" aria-hidden="true" ng-show="enableWebsiteUrlCorrect"></span>
					
			</div>
			<p class="text-danger">eg: http://www.google.com</p>
		</div>
		<div class="col-md-9">
			<div class="drop-csv-div mt-2" id="upload-url">
				<center>
					<p OR </center></p>
				<p class="drop-csv-text my-2">
					<span class="fa-stack">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-cloud-upload fa-stack-1x fa-inverse"></i>
					</span>&nbsp; To check in multiple websites, drop a .CSV file here
				</p>
				</center>
			</div>
			<form id="upload" method="post" action="upload.php"  enctype="multipart/form-data" target="_self">
							<input type="file" id="upload-url-action" name="upl" onchange="handleFiles(this.files)">
			<button type="submit" id="submit-upload-url">Submit</button>
</form>
			
		</div>
	</div>
	<div class="row highlight-div">
		<div class="col-md-9">
			<h2>Provide Unique ID of the individual</h2>	
			<label for="card-number">Please provide only govt issued IDs(Aadhar,PAN, Driver's License)</label>
			<div class="input-group input-group-lg">
			<input type="text" class="form-control" id="card-number" placeholder="Enter card number here" name="" ng-keyup="cardNumberKeyup($event)">	
			<span class="fa fa-times wrong-color fa-3x" aria-hidden="true" ng-show="enableCardNumberWrong"></span>
			<span class="fa fa-check correct-color fa-3x" aria-hidden="true" ng-show="enableCardNumberCorrect"></span>
			</div>

			<div class="drop-csv-div mt-2" id="upload-id">
				<center>
				<p class="drop-csv-text my-2">
					<span class="fa-stack">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-cloud-upload fa-stack-1x fa-inverse"></i>
					</span>&nbsp; To check multiple ID's, drop a .CSV file here.
				</p>
				</center>
			</div>
			<input type="file" id="upload-id-action">	
		</div>
	</div> 
<!--	<div class="row mb-2">
		<div class="col-md-12">
			<div class="error-full-line"><h1>Please correct the error above and re-submit!<h1></div>
		</div>
	</div>  -->
	<div class="row">
		<div class="col-md-12 text-center">
			<form id="Genarate Report" action="generateReport.php"  enctype="multipart/form-data" target="_self">
			<button class="btn btn-default report-btn-color report-btn-size" type="submit"><strong>Schedule to generate a report</strong></button>
		</form>
		</div>
	</div>

</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/angular.min.js"></script>
<script type="text/javascript" src="app.js"></script>
</body>
</html>
