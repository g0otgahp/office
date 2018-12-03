// Define the `PhoneListController` controller on the `phonecatApp` module
App.controller('EmployeeFormCtrl', function($scope, $http, $window, $location) {
  //EmployeeFormController function--------------------------------------------------------------------

  // console.log("EmployeeFormController");

  var profileId = $location.search().profileId;
  // console.log(profileId);

  $scope.loadPosition = function(){
    $http.get(URL+'Employee/SelectPosition').then(function(res){
      // console.log(res.data);
      $scope.dataPositions = res.data;
    })
  }

  if(!profileId){
    // console.log("Insert");

    $scope.loadPosition();
    $scope.form = {};
    $scope.form.profilePrefix = "นาย";
    $scope.form.profileSex = "ชาย";
    $scope.form.positionId = "0";

    $scope.insert = true;
    $scope.update = false;

    $scope.onClickInsert = function(){
      // console.log('onClickInsert');
      // console.log($scope.form);

      $http.post(URL+'Employee/EmployeeInsert',{
        'dataInsert' : $scope.form
      }).then(function(res){
        $window.alert('เพิ่มพนักงานสำเร็จ');
        $window.location.href = VIEW_URL + "Employee";
      })

    }

  }else{
    // console.log("Update");
    // console.log(profileId);
    $scope.loadPosition();
    $scope.form = {};

    $scope.insert = false;
    $scope.update = true;

    $http.post(URL+'Employee/SelectForUpdate',{
      'profileId' : profileId
    }).then(function(res){
      // console.log(res.data);
      $scope.form = res.data[0]
    })

    $scope.onClickUpdate = function(){
      // console.log($scope.form);
      $http.post(URL+'Employee/EmployeeUpdate',{
        'dataForUpdate' : $scope.form
      }).then(function(res){
        $window.alert("แก้ไขพนักงานสำเร็จ");
        $window.location.href = VIEW_URL + "Employee";
      })

    }

    $scope.onClickDelete = function(){
      // console.log($scope.form);
      $http.post(URL+'Employee/EmployeeDelete',{
        'profileId' : profileId
      }).then(function(res){
        $window.alert("ลบพนักงานสำเร็จ");
        $window.location.href = VIEW_URL + "Employee";
      })

    }

  }




  // ---------------------------------------------------------------------------

});
