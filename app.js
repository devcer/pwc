var app = angular.module('appModule', []);
app.controller('appController', function($scope, $http) {
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
  }, function errorCallback(response) {
    console.log("Error:"+response)
  });
  
  
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