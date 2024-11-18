var myapp=angular.module("MyApp",['ngSanitize']).config(function($interpolateProvider) {

    $interpolateProvider.startSymbol('{-{');
    $interpolateProvider.endSymbol('}-}');
  });
myapp.controller("MyCntrlr", function($http,$scope, $timeout){
    $scope.label="Contents";
    $scope.heading = 'Contents';
    $scope.amn = 0;

        
    $scope.openInsert = function () {
        $scope.resetModal();
        angular.element('#modal_default_13').modal('show');
        $scope.showTextarea = true;
        $scope.showLabel = true;
    }

    $scope.resetModal = function () {
        $scope.modalHeading = "Create " + $scope.heading;
        $scope.mainData = {
            'btnName': 'Insert',
            'content_id': '',
            'content_key': '',
            'content_page': '',
            'content_english': '',
            'content_arabic': ''
        }
       
        $scope.btnText = '<i class="fas fa-save" aria-hidden="true"></i> Save';
        $scope.amn = 0;
    }

    $scope.insertData = function () {
        if ($scope.chk != 0) {
            return false;
        }
        $scope.chk = 1;
        console.log($scope.amn);
        $http.post(Base_url + '/admin/contents/insert', {
            'mainData': $scope.mainData,
        }).then(function (response) {
          console.log(response.data);
            if (response.data.statuscode == 200) {
                angular.element('#modal_default_13').modal('hide');
                successalert(response.data.message);
                $scope.show_data();
            } else {
                //console.log(response.data.message);
                //failalert(response.data.message);
            }
            $scope.chk = 0;
           
        });
    }

    $scope.edit = function (xx) {
        $scope.modalHeading = "Edit " + $scope.heading;
        console.log("inside edit");
        $scope.mainData = {
          'btnName': 'Edit',
          'content_id': xx.content_id,
          'content_page': xx.content_page,
          'content_key': xx.content_key,
          'content_english': xx.content_english,
          'content_arabic': xx.content_arabic,
        };
        $scope.btnText = '<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit';
        $scope.chk = 0;
        angular.element('#modal_default_13').modal('show');
        
      };


$scope.show_data = function () {
    $http.post(Base_url + '/admin/contents/show', {  
      'Search': '',
    }).then(function (response) {
      $scope.dataitems = response.data;
      $timeout(function () {
        angular.element('#mainTable').doubleScroll();
      }, 500);
    });
  };

});
