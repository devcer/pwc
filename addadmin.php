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
include('session.php');
session_start();
$user_check = $_SESSION['login_user'];
$perm_sql = mysqli_query($db,"select * from Users where Username = '$user_check' ");
<<<<<<< HEAD
$row = mysqli_fetch_array($perm_sql,MYSQLI_ASSOC);
$perm_super_admin = $row['Admin'];
//echo $perm_super_admin;
=======
$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$perm_super_admin = $row['Yes'];

>>>>>>> a21f8c08b39df598bbbe78ad719007076b98019b
function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

<<<<<<< HEAD
function EmailPWD()
{
	$to      = $_POST['email'];
	$subject = 'Change your password';
	$message = 'hello';
	$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'Your password is:' .$AddPassword ."\r\n" .
    'localhost/pwc/changepasswd.php';

mail($to, $subject, $message, $headers);
}

=======
>>>>>>> a21f8c08b39df598bbbe78ad719007076b98019b
if ($perm_super_admin=="Yes")
	{
		
	 if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $AddUsername = mysqli_real_escape_string($db,$_POST['uname']);
      $AddPassword = randomPassword();
      $AddEmail =  mysqli_real_escape_string($db,$_POST['email']);
      $AddRegion =  mysqli_real_escape_string($db,$_POST['region']);
<<<<<<< HEAD
      // write code to check if username exists already.
=======
>>>>>>> a21f8c08b39df598bbbe78ad719007076b98019b
      $add_sql=mqsqli_query($db,"insert into Users(Username,Password,Email,Region) values ('$AddUsername','$AddPassword','$AddEmail,'$AddRegion') ");
      $pre_count= "SELECT * FROM Users";
      $result = mysqli_query($db,$add_sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count > $pre_count) {
<<<<<<< HEAD
         echo '{"status":"success"}';
		exit;
        # header("location: usersearch.php"); 
      }else {
         $error = "Failed to add a user";
         echo '{"status":"Failed to add a user"}';
		exit;
      }
   }
   	
	}
else
{
	echo '{"error":You do not have admin privilages 	}';
	header("location: access-denied.php");
	exit();
=======
         
         header("location: addadmin.php");
      }else {
         $error = "Failed to add a user";
      }
   }
		
>>>>>>> a21f8c08b39df598bbbe78ad719007076b98019b
	}
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
<body style="height: 100%">
<nav class="navbar navbar-toggleable-md navbar-light bg-nav-color">
<<<<<<< HEAD
  <a class="navbar-brand font-white" href="usersearch.php">PwC search engine</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <a class="nav-item nav-link font-white" style="border-right: 1px solid black;" href="admindashboard.html">Reports</a>
        <a class="nav-item nav-link font-white" href="logout.php">Log Out</a>
=======
  <a class="navbar-brand font-white" href="#">Website name</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <a class="nav-item nav-link font-white" style="border-right: 1px solid black;" href="#">Reports</a>
        <a class="nav-item nav-link font-white" href="#">Admin</a>
>>>>>>> a21f8c08b39df598bbbe78ad719007076b98019b
    </ul>
  </div>
</nav>
  <div class="row">
    <div class="col-3">
      <div class="div-sidebar">
        <ul class="ul-sidebar">
          <li><span class="fa fa-home" aria-hidden="true"></span>  ADMIN HOME</li>
          <li><span class="fa fa-users" aria-hidden="true"></span>  MANAGE SUB-ADMINS</li>
          <li><span class="fa fa-plus" aria-hidden="true"></span><span class="fa fa-user" aria-hidden="true"></span> ADD SUB-ADMINS</li>
          <li><span class="fa fa-users" aria-hidden="true"></span>  USERS</li>
        </ul>
      </div>
    </div>
    <div class="col-9">
<<<<<<< HEAD
	<form class="modal-content animate" action="" method = "post">
=======
>>>>>>> a21f8c08b39df598bbbe78ad719007076b98019b
      <div class="container">    
        <div class="row mt-4">
			<div>
				<h3 align="center" class="userhead">Welcome <?php echo $login_session;?></h3>
			</div>
          <div class="col-md-12">
          <h1>Add Admin</h1>
          </div>
        </div>
        <div class="row breadcrump mb-2">
          <div class="col-12">
            <p>Home > Admins > Add</p>
          </div>
        </div>
        <div class="highlight-div-add-admin">
          <div class="row">
            <div class="col-12">
              <h2 class="mb-0">Contact Details</h2>
            </div>
          </div>
          <hr class="m-1" style="background-color: white;height: 2px;"/>
          <div class="row">
            <div class="col-2">
              <label for="full-name">Name</label>
            </div>
            <div class="col-6">
              <div class="input-group">
              <input type="text" class="form-control" id="full-name" placeholder="Enter User name" name="uname"> 
              </div>  
            </div>
            <div class="col-4"></div>
          </div>
          <hr class="m-1" style="background-color: white;height: 2px;"/>
          <div class="row">
            <div class="col-2">
              <label for="full-name">Email</label>
            </div>
            <div class="col-6">
              <div class="input-group">
              <input type="text" class="form-control" id="full-name" placeholder="Type Email here" name="email"> 
              </div>  
            </div>
            <div class="col-4"></div>
          </div>
          <hr class="m-1" style="background-color: white;height: 2px;"/>
          <div class="row">
            <div class="col-2">
              <label for="full-name">Region</label>
            </div>
            <div class="col-6">
              <div class="input-group">
              <input type="text" class="form-control" id="full-name" placeholder="Type to pick a Region" name="region"> 
              </div>  
            </div>    
            <div class="col-4"></div>
          </div>
        </div>
        <div class="highlight-div-add-admin">
          <div class="row">
            <div class="col-12">
              <h2>Manage Permissions</h2>
            </div>
          </div>
          <hr class="m-1" style="background-color: white;height: 2px;"/>
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
          <hr class="m-1" style="background-color: white;height: 2px;"/>
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
          <hr class="m-1" style="background-color: white;height: 2px;"/>
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
          <hr class="m-1" style="background-color: white;height: 2px;"/>
          <div class="row">
            <div class="col-3">
              <label for="full-name">Select cards to allow</label>
            </div>
            <div class="col-6">
              <div class="input-group">
<<<<<<< HEAD
              <label><input type="checkbox" name="PAN"> PAN</label> &nbsp;&nbsp;&nbsp;
              <label><input type="checkbox" name="Aadhar"> Aadhar</label> &nbsp;&nbsp;&nbsp;
             <!-- <label><input type="checkbox" name=""> Passport</label> &nbsp;&nbsp;&nbsp;
              <label><input type="checkbox" name=""> Voter ID</label> &nbsp;&nbsp;&nbsp; -->
              <label><input type="checkbox" name="License"> Licence</label> &nbsp;&nbsp;&nbsp;
=======
              <label><input type="checkbox" name=""> PAN</label> &nbsp;&nbsp;&nbsp;
              <label><input type="checkbox" name=""> Aadhar</label> &nbsp;&nbsp;&nbsp;
             <!-- <label><input type="checkbox" name=""> Passport</label> &nbsp;&nbsp;&nbsp;
              <label><input type="checkbox" name=""> Voter ID</label> &nbsp;&nbsp;&nbsp; -->
              <label><input type="checkbox" name=""> Licence</label> &nbsp;&nbsp;&nbsp;
>>>>>>> a21f8c08b39df598bbbe78ad719007076b98019b
              </div>  
            </div>
            <div class="col-3"></div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <center>
<<<<<<< HEAD
              <button class="btn btn-default report-btn-color report-btn-size" type="submit"> Save Admin</button>
=======
              <button class="btn btn-default report-btn-color report-btn-size"> Save Admin</button>
>>>>>>> a21f8c08b39df598bbbe78ad719007076b98019b
            </center>
          </div>
        </div>
      </div>
<<<<<<< HEAD
      </form>
=======
>>>>>>> a21f8c08b39df598bbbe78ad719007076b98019b
    </div>
  </div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/angular.min.js"></script>
<script type="text/javascript" src="app.js"></script>
</body>
</html>
