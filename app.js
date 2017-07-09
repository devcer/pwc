var app = angular.module('appModule', []);
app.controller('appController', function($scope, $http) {
	$scope.showUriSection=false;
	$scope.showUniqueId=false;
  $scope.showGenerateReport=true;
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