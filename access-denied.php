<?php
/*
 * FetchPermission.php
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
<body ng-app="appModule" ng-controller="appController">
<nav class="navbar navbar-toggleable-md navbar-light bg-nav-color">
  <a class="navbar-brand font-white" href="index.html">PwC Search engine</a>

 <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <a class="nav-item nav-link font-white" style="border-right: 1px solid black;" href="login.php">Login</a>
        <a class="nav-item nav-link font-white" href="SignUp.php">Sign Up</a>
    </ul>
  </div> -->
</nav>
<!-- <div class="div-sidebar">
	<ul class="ul-sidebar">
		<li><span class="fa fa-home" aria-hidden="true"></span>  ADMIN HOME</li>
		<li><span class="fa fa-users" aria-hidden="true"></span>  MANAGE SUB-ADMINS</li>
		<li><span class="fa fa-plus" aria-hidden="true"></span><span class="fa fa-user" aria-hidden="true"></span> ADD SUB-ADMINS</li>
		<li><span class="fa fa-users" aria-hidden="true"></span>  USERS</li>
	</ul>
</div> -->
<p>Access Denied!</p>
<!-- <div class="container">
	<div class="row">
		<div class="col-md-12">
		<h1>FIND YOUR ID</h1>
		</div>
	</div>
	<hr>
	<div class="row highlight-div">
		<div class="col-md-9">
			<h2>Which website would you like us to check</h2>	
			<label for="website-url">Example of valid url</label>
			<div class="input-group input-group-lg">
			<input type="text" class="form-control" id="website-url" placeholder="http://" name="">
			<span class="fa fa-times wrong-color fa-3x" aria-hidden="true"></span>
			</div>		
		</div>
	</div>
	<div class="row highlight-div">
		<div class="col-md-9">
			<h2>Provide your Unique ID</h2>	
			<label for="card-number">Please provide only govt issued IDs</label>
			<div class="input-group input-group-lg">
			<input type="text" class="form-control" id="card-number" placeholder="Enter card number here" name="">	
			<span class="fa fa-check correct-color fa-3x" aria-hidden="true"></span>
			</div>	
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="error-full-line"><h1>Please correct the error above and re-submit!<h1></div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center">
			<button class="btn btn-default report-btn-color report-btn-size">Generate Report</button>
		</div>
	</div>

</div> -->
<!--
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<h1>Add Admin</h1>
		</div>
	</div>
	<div class="row breadcrump mb-2">
		<div class="col-12">
			<p>Home > Admins > Add</p>
		</div>
	</div>
	<div class="highlight-div">
	<div class="row">
		<div class="col-12">
			<h2>Contact Details</h2>
		</div>
	</div>
	<hr style="background-color: white;height: 2px;"/>
	<div class="row">
		<div class="col-2">
			<label for="full-name">Name</label>
		</div>
		<div class="col-6">
			<div class="input-group">
			<input type="text" class="form-control" id="full-name" placeholder="Enter full name" name="">	
			</div>	
		</div>
		<div class="col-4"></div>
	</div>
	<hr style="background-color: white;height: 2px;"/>
	<div class="row">
		<div class="col-2">
			<label for="full-name">Email</label>
		</div>
		<div class="col-6">
			<div class="input-group">
			<input type="text" class="form-control" id="full-name" placeholder="Type Email here" name="">	
			</div>	
		</div>
		<div class="col-4"></div>
	</div>
	<hr style="background-color: white;height: 2px;"/>
	<div class="row">
		<div class="col-2">
			<label for="full-name">Region</label>
		</div>
		<div class="col-6">
			<div class="input-group">
			<input type="text" class="form-control" id="full-name" placeholder="Type to pick a Region" name="">	
			</div>	
		</div>		
		<div class="col-4"></div>
	</div>
	</div>
	<div class="highlight-div">
	<div class="row">
		<div class="col-12">
			<h2>Manage Permissions</h2>
		</div>
	</div>
	<hr style="background-color: white;height: 2px;"/>
	<div class="row">
		<div class="col-3">
			<label for="full-name">Allow multiple reports</label>
		</div>
		<div class="col-6">
			<div class="input-group">
			<label><input type="radio" name=""> Yes</label> &nbsp;&nbsp;&nbsp;
			<label><input type="radio" name=""> No</label>
			</div>	
		</div>
		<div class="col-3"></div>
	</div>
	<hr style="background-color: white;height: 2px;"/>
	<div class="row">
		<div class="col-3">
			<label for="full-name">Allow access to all regions</label>
		</div>
		<div class="col-6">
			<div class="input-group">
			<label><input type="radio" name=""> Yes</label> &nbsp;&nbsp;&nbsp;
			<label><input type="radio" name=""> No</label>
			</div>	
		</div>
		<div class="col-3"></div>
	</div>
	<hr style="background-color: white;height: 2px;"/>
	<div class="row">
		<div class="col-3">
			<label for="full-name">Allow access to patterns</label>
		</div>
		<div class="col-6">
			<div class="input-group">
			<label><input type="radio" name=""> Yes</label> &nbsp;&nbsp;&nbsp;
			<label><input type="radio" name=""> No</label>
			</div>	
		</div>
		<div class="col-3"></div>
	</div>
	<hr style="background-color: white;height: 2px;"/>
	<div class="row">
		<div class="col-3">
			<label for="full-name">Select cards to allow</label>
		</div>
		<div class="col-6">
			<div class="input-group">
			<label><input type="checkbox" name=""> PAN</label> &nbsp;&nbsp;&nbsp;
			<label><input type="checkbox" name=""> Aadhar</label> &nbsp;&nbsp;&nbsp;
			<label><input type="checkbox" name=""> Passport</label> &nbsp;&nbsp;&nbsp;
			<label><input type="checkbox" name=""> Voter ID</label> &nbsp;&nbsp;&nbsp;
			<label><input type="checkbox" name=""> Licence</label> &nbsp;&nbsp;&nbsp;
			</div>	
		</div>
		<div class="col-3"></div>
	</div>
	</div>
	<div class="row">
		<div class="col">
			<center>
				<button class="btn btn-default report-btn-color report-btn-size"> Save Admin</button>
			</center>
		</div>
	</div>
</div> -->
<!-- <div class="container">
	<div class="row">
		<div class="col-md-12">
		<h1>Admin Dashboard</h1>
		</div>
	</div>
	<div class="row breadcrump mb-2">
		<div class="col-12">
			<p>Home > Reports > Reports#14578</p>
		</div>
	</div>
	<div class="row font-white">
		<div class="col-3 text-center ">
			<div class="statistic-bar grey-block">
				<p class="mini-font mb-0">SUB ADMINS</p>
				<p class="jumbo-font">25</p>	
			</div>
		</div>
		<div class="col-3 text-center">
			<div class="statistic-bar grey-block">
				<p class="mini-font mb-0">USERS</p>
				<p class="jumbo-font">450</p>
			</div>
		</div>
	</div>
	<div class="row font-white">
		<div class="col-3 text-center ">
			<div class="statistic-bar blue-block">
				<p class="mini-font mb-0">TOTAL SCANS</p>
				<p class="jumbo-font">3000</p>		
			</div>			
		</div>
		<div class="col-3 text-center ">
			<div class="statistic-bar red-block">
				<p class="mini-font mb-0">MATCHED</p>
				<p class="jumbo-font">50</p>
			</div>
		</div>
		<div class="col-3 text-center ">
			<div class="statistic-bar yellow-block">
				<p class="mini-font mb-0">NEEDS ATTENTION</p>
				<p class="jumbo-font">35</p>
			</div>
		</div>
		<div class="col-3 text-center">
			<div class="statistic-bar  green-block">
				<p class="mini-font mb-0">CLEARED</p>
				<p class="jumbo-font">20</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
		<table class="table">
			<thead class="thead-inverse">
				<tr>
					<th></th>
					<th>Website Url</th>
					<th>Filter</th>
					<th>ID Number</th>
					<th>Type</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
		</div>
	</div>
</div> -->
<!-- <div class="container">
	<div class="row">
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
					  <input type="text" class="form-control" placeholder="email" aria-describedby="email-field">
					</div>		
				</div>
				<div class="col-12">
					<div class="input-group">
					  <span class="input-group-addon" id="pwd-field"><span class="fa fa-lock" aria-hidden="true"></span></span>
					  <input type="password" class="form-control" placeholder="********" aria-describedby="pwd-field">
					</div>		
				</div>
				<div class="col-6">
					  <label><input type="checkbox"> Remember me</label>
				</div>
				<div class="col-6 text-right">
					<p style="color:#618A9E;">Forgot password?</p>
				</div>
				<div class="col-12">
					<button class="btn report-btn-color" style="width: 100%;">Sign in</button>
				</div>
			</div>
		</div>
		<div class="col-6">
			<div class="row">
				<div class="col-12">
					<p>Use your social media accounts</p>
				</div>
			</div>
		</div>
	</div>
</div> -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/angular.min.js"></script>
<script type="text/javascript" src="app.js"></script>
</body>
</html>
