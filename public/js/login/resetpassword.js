var app=angular.module("MyApp",['ngSanitize']).config(function($interpolateProvider) {

    $interpolateProvider.startSymbol('{-{');
    $interpolateProvider.endSymbol('}-}');
  });
app.controller("MyCntrlr", function($http,$scope){
    $scope.label='<div class="alert alert-outline-primary">Change Password Here</div>';
    snoti("Change Password");
    $scope.reset = function()
    {
      $scope.Login = {
        'password'          :   null,
        'password_confirm'  :   null,
        'slug'              :   slug,
      }
    }
    $scope.send_resetlink = function()
    {
        if($scope.Login.password !== $scope.Login.password_confirm){ dnoti("Password and Confirm Password must be same"); return false; }
        show_loader();
        $http.post(Base_url+'/resetpassword/updatepassword',{
            'Login' : $scope.Login,
          }).then(function(response){
            console.log(response.data);
            hide_loader();
            if(response.data.code == 200)
            {
                snoti(response.data.msg);
                $scope.label='<div class="alert alert-outline-success"><i class="fa fa-check-circle" aria-hidden="true"></i> '+response.data.msg+'</div>';
                $scope.reset();
            }else{
                dnoti(response.data.msg);
                $scope.label='<div class="alert alert-outline-danger"><i class="fa fa-ban" aria-hidden="true"></i> '+response.data.msg+'</div>';
            }
          });
    }

});

