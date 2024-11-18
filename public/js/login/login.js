var app = angular.module("MyApp", ['ngSanitize']).config(function ($interpolateProvider) {
  $interpolateProvider.startSymbol('{-{');
  $interpolateProvider.endSymbol('}-}');
});
app.controller("MyCntrlr", function ($http, $scope) {
  $scope.message = 'Enter username and password to login';

  $scope.reset = function () {
    $scope.Log = {
      'username': null,
      'password': null,
    }
    generalalert($scope.message);
  }
  $scope.loginAction = function () {
    $http.post(Base_url + '/login/action', {
      'Log': $scope.Log,
    }).then(function (response) {
      if (response.data.statuscode == 200) {
        setTimeout(function () {
          location.reload(true);
        }, 300);
        successalert(response.data.message);
      } else {
        failalert(response.data.message);
      }
    });
  }
});

