var app=angular.module("MyApp",['ngSanitize']).config(function($interpolateProvider) {

    $interpolateProvider.startSymbol('{-{');
    $interpolateProvider.endSymbol('}-}');
  });
app.controller("MyCntrlr", function($http,$scope){
    $scope.label='<div class="alert alert-outline-primary">Enter your Email/Username</div>';
    snoti("Welcome To Password Reset");
    $scope.reset = function()
    {
      $scope.Login = {
        'username'  : null,
      }
    }
    $scope.send_resetlink = function()
    {
        show_loader();
        $http.post(Base_url+'/forgetpassword/sendresetlink',{
            'Login' : $scope.Login,
          }).then(function(response){
            hide_loader();
            if(response.data.code == 200)
            {
                snoti(response.data.msg);
                $scope.label='<div class="alert alert-outline-success">'+response.data.msg+'</div>';
                $scope.reset();
            }else{
                dnoti(response.data.msg);
            }
          });
    }

});

