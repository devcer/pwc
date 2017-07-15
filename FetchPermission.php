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
$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$perm_add = $row['AddUser'];
$perm_delete= $row['DeleteUser'];

if ($perm_add=="AddUser")
	{
		
	 if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $AddUsername = mysqli_real_escape_string($db,$_POST['uname']);
      $AddPassword = mysqli_real_escape_string($db,$_POST['psw']); 
      $add_sql=mqsqli_query($db,"insert into Users(Username,Password) values ('$AddUsername','$AddPassword') ");
      $pre_count= "SELECT * FROM Users";
      $result = mysqli_query($db,$add_sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count > $pre_count) {
         
         header("location: Addadmin.php");
      }else {
         $error = "Failed to add a user";
      }
   }
		
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>
	
</body>

</html>
