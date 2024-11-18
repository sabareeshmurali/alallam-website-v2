var myapp = angular.module("MyApp", ['ngSanitize']).config(function ($interpolateProvider) {
    $interpolateProvider.startSymbol('{-{');
    $interpolateProvider.endSymbol('}-}');
  });
  myapp.controller("MyCntrlr", function ($http, $scope, $timeout) {
    $scope.heading = 'Dashboard';
    $scope.show_data = function(){
        $scope.totalAgents = 0;
        $scope.totalOperation = 0;
        
    }

  });






