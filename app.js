var app = angular.module('appModule', []);

app.service('GraphService',function () {
  this.drawGraph = function(tableData) {
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var graphData=[];
      for(var i=0;i<tableData.length;i++){
        graphData.push([tableData[i].url,tableData[i].aadhars.length]);
      }

      var data = new google.visualization.DataTable();
      data.addColumn('string', 'url');
      data.addColumn('number', 'hits');
      data.addRows(graphData);
      var options = {'title':'Data with urls and hits',
                     'width':400,
                     'height':300};
      var chart = new google.visualization.BarChart (document.getElementById('chart_div'));
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

  var dashboardDataLen=0;
  $http({
    method: "GET",
    url: "AadharoutPut.json",
    dataType: "json"
  }).then(function successCallback(response) {
    dashboardDataLen=response.data.length;
    $scope.dashboardData=response.data;
    for(var i=0;i<dashboardDataLen;i++){
      $scope.users=$scope.users + response.data[i].aadhars.length;
    }
    $('#myTable').DataTable({
      'searching': false,
      'autoWidth': false
    });
    GraphService.drawGraph($scope.dashboardData);
  }, function errorCallback(response) {
    console.log("Error:"+response)
  });
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

function handleFiles(files){
  console.log("file uploaded");
  $("#submit-upload-url").click();
}

// $("#website-url").on("keydown",(context)=>{
//   context.target.value.startsWith("https://");
//   console.log("ES6 works");
// })