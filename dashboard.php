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
  <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
</head>
<body style="height: 100%" ng-app="appModule" ng-controller="appController">
<nav class="navbar navbar-toggleable-md navbar-light bg-nav-color">
  <a class="navbar-brand font-white" href="#">Website name</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <a class="nav-item nav-link font-white" style="border-right: 1px solid black;" href="#">Reports</a>
        <a class="nav-item nav-link font-white" href="#">Admin</a>
    </ul>
  </div>
</nav>
<div class="row">
  <div class="col-3">
    <div class="div-sidebar">
    </div>
  </div>
  <div class="col-8">
    <div class="container mt-4">
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
            <p class="jumbo-font">{{users}}</p>
          </div>
        </div>
        <div class="col-6">
          <div id="chart_div"></div>
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
        <table class="table" id="myTable">
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
            <tr ng-repeat="x in dashboardData">
              <td>{{$index+1}}</td>
              <td>{{x.url}}</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/angular.min.js"></script>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript" src="app.js"></script>
</body>
</html>
