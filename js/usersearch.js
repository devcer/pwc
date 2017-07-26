var app = angular.module('appModule', []);

app.controller("userSearchCtrl",function($scope){
  $scope.enableWebsiteUrlCorrect = false;
  $scope.enableWebsiteUrlWrong = false;

  // $scope.enableCardNumberCorrect = false;
  // $scope.enableCardNumberWrong = false;

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

  // $scope.cardNumberKeyup=(context)=>{
  //   console.log("ES6 works inside angular");
  //   if(context.target.value.startsWith("http://") || context.target.value.startsWith("https://")){
  //     $scope.enableCardNumberWrong = false;
  //     $scope.enableCardNumberCorrect = true;
  //   }else{
  //     $scope.enableCardNumberWrong = true;
  //     $scope.enableCardNumberCorrect = false;
  //   }
  // };
});

$("#upload-url").on("click",function(){
  $("#upload-url-action").get(0).click();
});

$("#upload-id").on("click",function(){
  $("#upload-id-action").get(0).click();
});

$("input#upload-url-action").on('change',(e)=>{
  $("#uploaded-url-filename").html("<span class='fa fa-check correct-color fa-3x' aria-hidden='true'></span><strong>File uploaded successfully:</strong><br/>"+e.target.files[0].name);
  $("#submit-upload-url").click(); 
});
$("input#upload-id-action").on('change',(e)=>{
  $("#uploaded-id-filename").html("<span class='fa fa-check correct-color fa-3x' aria-hidden='true'></span><strong>File uploaded successfully:</strong><br/>"+e.target.files[0].name);
  $("#submit-upload-id").click(); 
});