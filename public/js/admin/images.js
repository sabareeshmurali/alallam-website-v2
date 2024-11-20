var myapp = angular.module("MyApp", ['ngSanitize', 'ngFileUpload']).config(function ($interpolateProvider) {
    $interpolateProvider.startSymbol('{-{');
    $interpolateProvider.endSymbol('}-}');
});
myapp.controller("MyCntrlr", function ($http, $scope, Upload, $timeout) {
    $scope.heading = 'Images ';
    $scope.sortColumn = 'atr_name_english';
    $scope.sortOrder = '';
    $scope.keyword = '';
    $scope.openInsert = function () {
        $scope.resetModal();
        angular.element('#modal_default_13').modal('show');
    }
    $scope.resetModal = function () {
        $scope.modalHeading = "Register " + $scope.heading;
        $scope.mainData = {
            'btnName': 'Insert',
            'img_id': null,
            'img_name_en': null,
            'img_name_ar': null,
            'img_path': null,
        }
        $scope.btnText = '<i class="fas fa-save" aria-hidden="true"></i> Save';
        $scope.amn = 0;
    }

    $scope.saveImage = function () {
      if ($scope.amn != 0) {
          return false;
      }
      $scope.amn = 1;
      $http.post(Base_url + '/admin/images/insert', {
          'mainData': $scope.mainData,
      }).then(function (response) {
          if (response.data.statuscode == 200) {
              successalert(response.data.message);
              $scope.resetModal();
              $scope.show_data();
          } else {
              failalert(response.data.message);
          }
          $scope.amn = 0;
      });
  }

    $scope.edit = function (xx) {
        $scope.modalHeading = "Edit " + $scope.heading;
        $scope.existpath = xx.img_path;
      
        $scope.mainData = {
            'btnName': 'Edit',
            'img_id': xx.img_id,
            'img_name' : xx.img_name,
            'img_path': null,
            'existpath' : xx.img_path

        }
        $scope.btnText = '<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit';
        $scope.amn = 0;
        angular.element('#modal_default_13').modal('show');
        if (!$scope.mainData.img_path) {

            $scope.remove_img_depart();
          } else {
            angular.element('#img_add_wrap_dep').addClass('d-none');
            
          }
    }

    $scope.insertData = function () {
      console.log("insert inside");
      if ($scope.amn != 0) {
        console.log("insert inside 1");
          return false;
      }
      $scope.amn = 1;
      $http.post(Base_url + '/admin/images/insert', {
        'mainData': $scope.mainData,
    }).then(function (response) {
        if (response.data.statuscode == 200) {
   
          $scope.show_data();
            successalert(response.data.message);
       
            
           
          } else {
              failalert(response.data.message);
       
          }
          $scope.amn = 0;
      });
  }

    $scope.show_data = function () {
        $http.post(Base_url + '/admin/images/show', {
            'Search': '',
        }).then(function (response) {
            $scope.dataitems = response.data;
            console.log(response.data);
            $timeout(function () {
                angular.element('#mainTable').doubleScroll();
            }, 500);
        })
    }

    $scope.setimageDepart = function () {
        if ($('.cropped6').prop('src') != '') {
            console.log("inside");
         
          $scope.croppedDataUrl6 = angular.element('.cropped6').prop('src');
          angular.element('#departImgModal').modal('hide');
          angular.element('#img_add_wrap_dep').addClass('d-none');
          
          $scope.conditionToShowDiv = true;
          Upload.upload({
            
            url: Base_url + '/image/general/upload',
            data: {
              file_details: Upload.dataUrltoBlob($scope.croppedDataUrl6)
            },
          }).then(function (response) {
            $timeout(function () {
              $scope.result6 = response.data;
          
              $scope.mainData.img_path = response.data.path;

            });
          }, function (response) {
            if (response.status > 0) $scope.errorMsg6 = response.status
              + ': ' + response.data;
          }, function (evt) {
      
            $scope.progress6 = parseInt(100.0 * evt.loaded / evt.total);
          });
      
        } 
        else {
          alert("Error");
        }
      }

      $scope.remove_img_depart = function () {
        $scope.mainData.img_path = $scope.result6 = null;
        $('#img_add_wrap_dep').removeClass('d-none');
        $scope.progress6 = -1;
        $('.cropped6').addClass('hidden');
        $scope.croppedDataUrl6 = null;
        $scope.result6 = false;
      }


});



let result6 = document.querySelector('.result6'),
  img_result6 = document.querySelector('.img-result6'),
  options6 = document.querySelector('.options6'),
  save6 = document.querySelector('.save6'),
  cropped6 = document.querySelector('.cropped6'),
  upload6 = document.querySelector('#img_path'),
  // choose5 =document.querySelector('.choose5'),
  cropper6 = '';

upload6.addEventListener('change', (e) => {
    console.log("button");
  $('#departImgModal').modal('show');
  $('.cropped6').attr('src', '');
  $('#save_img_btn6').addClass('hidden');
  if (e.target.files.length) {
    const reader6 = new FileReader();
    reader6.onload = (e) => {
      if (e.target.result) {
        let img6 = document.createElement('img');
        img6.id = 'image_department';
        img6.src = e.target.result;
        result6.innerHTML = '';
        result6.appendChild(img6);
        save6.classList.remove('hide');
        options6.classList.remove('hide');
        cropper6 = new Cropper(img6,
          {
            aspectRatio: 3 / 2,
            data: { width: 300, height: 200, }
          });
      }
    };
    reader6.readAsDataURL(e.target.files[0]);
  }
});
save6.addEventListener('click', (e) => {
  e.preventDefault();
  let imgSrc6 = cropper6.getCroppedCanvas({
    width: 300,
    height: 200
  }).toDataURL();
  $('#save_img_btn6').removeClass('d-none');
  cropped6.classList.remove('hide');
  img_result6.classList.remove('hide');
  cropped6.src = imgSrc6;
});






