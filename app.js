var app = angular.module('appModule', []);

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


app.controller('appController', function($scope, $http, GraphService) {
	$scope.showUriSection=false;
	$scope.showUniqueId=false;
  $scope.showGenerateReport=true;
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
    if(dashboardDataLen==9)
      GraphService.drawGraph($scope.masterData);
  }
});
app.controller("userSearchCtrl",function($scope){
  $scope.enableWebsiteUrlCorrect = false;
  $scope.enableWebsiteUrlWrong = false;

  $scope.enableCardNumberCorrect = false;
  $scope.enableCardNumberWrong = false;

  $scope.websiteUrlKeyup=(context)=>{
    console.log("ES6 works inside angular");
    if(context.target.value.startsWith("http://") || context.target.value.startsWith("https://")){
      $scope.enableWebsiteUrlWrong = false;
      $scope.enableWebsiteUrlCorrect = true;
    }else{
      $scope.enableWebsiteUrlWrong = true;
      $scope.enableWebsiteUrlCorrect = false;
    }
  };

  $scope.cardNumberKeyup=(context)=>{
    console.log("ES6 works inside angular");
    if(context.target.value.startsWith("http://") || context.target.value.startsWith("https://")){
      $scope.enableCardNumberWrong = false;
      $scope.enableCardNumberCorrect = true;
    }else{
      $scope.enableCardNumberWrong = true;
      $scope.enableCardNumberCorrect = false;
    }
  };
});
app.directive("uri",function(){
  return {
    templateUrl:"uri.html" 
  };
});
app.directive("uniqueid",function(){
  return {
    templateUrl:"uniqueid.html" 
  };
});
app.directive("generate-report",function(){
  return {
    templateUrl:"generatereport.html" 
  };
});

$("#upload-url").on("click",function(){
  $("#upload-url-action").get(0).click();
});

$("#upload-id").on("click",function(){
  $("#upload-id-action").get(0).click();
});

$("input#upload-url-action").on('change',(e)=>{
  $("#uploaded-url-filename").html("<strong>File uploaded successfully:</strong><br/>"+e.target.files[0].name);
  $("#submit-upload-url").click(); 
});
$("input#upload-id-action").on('change',(e)=>{
  $("#uploaded-id-filename").html("<strong>File uploaded successfully:</strong><br/>"+e.target.files[0].name);
  $("#submit-upload-id").click(); 
});
$(document).ready( function () {
    $('#myTable').DataTable({
      'autoWidth': false
    });
} );
// $("#website-url").on("keydown",(context)=>{
//   context.target.value.startsWith("https://");
//   console.log("ES6 works");
// })