var app = angular.module('adminDashboardModule', []);

app.service('GraphService',function () {
  this.drawGraph = function(tableData) {
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var graphData=[];
      for(var i=0;i<tableData.length;i++){
        graphData.push([tableData[i].url,tableData[i][tableData[i].type].length, tableData[i].color]);
      }

      var data = new google.visualization.DataTable();
      data.addColumn('string', 'url');
      data.addColumn('number', 'hits');
      data.addColumn({type: 'string', role: 'style'});
      data.addRows(graphData);
      var options = {'title':'Data with urls and hits',
                     'width':600,
                     'height':400};
      var chart = new google.visualization.BarChart (document.getElementById('chart_div'));
      
      function selectHandler(){
        console.log("selected item:"+ chart.getSelection()[0]);
        var selectedItem = chart.getSelection()[0];
        if (selectedItem) {
          var topping = data.getValue(selectedItem.row, 0);
          window.open(topping);
         }
      }

      google.visualization.events.addListener(chart, 'select', selectHandler);
      chart.draw(data, options);
      }
    return "nothing";
  };
});

app.controller('adminDashboardController', function($scope, $http, GraphService) {
  $scope.users=0;
  $scope.masterData = [];
  var dashboardDataLen=0;

  $http({
    method: "GET",
    url: "var/www/html/outputs/GREEN/aadhar.json",
    dataType: "json"
  }).then(function successCallback(response) {
    $scope.pushToMasterJson(response.data, "green");
  }, function errorCallback(response) {
    console.log("Error:"+response)
  });

  $http({
    method: "GET",
    url: "var/www/html/outputs/GREEN/pan.json",
    dataType: "json"
  }).then(function successCallback(response) {
    $scope.pushToMasterJson(response.data, "green");
  }, function errorCallback(response) {
    console.log("Error:"+response)
  });
  $http({
    method: "GET",
    url: "var/www/html/outputs/GREEN/license.json",
    dataType: "json"
  }).then(function successCallback(response) {
    $scope.pushToMasterJson(response.data, "green");
  }, function errorCallback(response) {
    console.log("Error:"+response)
  });

  $http({
    method: "GET",
    url: "var/www/html/outputs/RED/aadhar.json",
    dataType: "json"
  }).then(function successCallback(response) {
    $scope.pushToMasterJson(response.data, "red");
  }, function errorCallback(response) {
    console.log("Error:"+response)
  });

  $http({
    method: "GET",
    url: "var/www/html/outputs/RED/pan.json",
    dataType: "json"
  }).then(function successCallback(response) {
    $scope.pushToMasterJson(response.data, "red");
  }, function errorCallback(response) {
    console.log("Error:"+response)
  });
  $http({
    method: "GET",
    url: "var/www/html/outputs/RED/license.json",
    dataType: "json"
  }).then(function successCallback(response) {
    $scope.pushToMasterJson(response.data, "red");
  }, function errorCallback(response) {
    console.log("Error:"+response)
  });

  $http({
    method: "GET",
    url: "var/www/html/outputs/YELLOW/aadhar.json",
    dataType: "json"
  }).then(function successCallback(response) {
    $scope.pushToMasterJson(response.data, "yellow");
  }, function errorCallback(response) {
    console.log("Error:"+response)
  });

  $http({
    method: "GET",
    url: "var/www/html/outputs/YELLOW/pan.json",
    dataType: "json"
  }).then(function successCallback(response) {
    $scope.pushToMasterJson(response.data, "yellow");
  }, function errorCallback(response) {
    console.log("Error:"+response)
  });
  $http({
    method: "GET",
    url: "var/www/html/outputs/YELLOW/license.json",
    dataType: "json"
  }).then(function successCallback(response) {
    $scope.pushToMasterJson(response.data, "yellow");
  }, function errorCallback(response) {
    console.log("Error:"+response)
  });

  $scope.pushToMasterJson=(jsonFile, color)=>{
    for(var i=0;i<jsonFile.length;i++){
      jsonFile[i].type=Object.keys(jsonFile[i])[0];
      jsonFile[i].color=color;
      $scope.users=$scope.users+jsonFile[i][jsonFile[i].type].length;
      $scope.masterData.push(jsonFile[i]);
    }
    dashboardDataLen+=1;
    if(dashboardDataLen==9){
      GraphService.drawGraph($scope.masterData);
    }
  }
});

$(document).ready( function () {
  setTimeout(function(){
	  $('#myTable').DataTable({
	    'autoWidth': false
	  });
  },1000);
});