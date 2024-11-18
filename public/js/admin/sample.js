var myapp=angular.module("MyApp",['ngSanitize']).config(function($interpolateProvider) {

    $interpolateProvider.startSymbol('{-{');
    $interpolateProvider.endSymbol('}-}');
  });
myapp.controller("MyCntrlr", function($http,$scope, $timeout){
    $scope.label="Contents";
    $scope.heading = 'contents';
        



$scope.show_data = function () {
    $http.post(Base_url + '/admin/sample/show', {  
      'Search': '',
    }).then(function (response) {
      $scope.dataitems = response.data;
      $timeout(function () {
        angular.element('#mainTable').doubleScroll();
      }, 500);
    });
  };

});
