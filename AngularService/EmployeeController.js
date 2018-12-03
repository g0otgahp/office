// Define the `PhoneListController` controller on the `phonecatApp` module
App.controller('EmployeeCtrl', function($scope, $http, $window, $location) {
  //EmployeeCtrl function--------------------------------------------------------------------

  // console.log("EmployeeController");

  $scope.loadView = function(){
    $http.get(URL+'Employee/SelectEmployee').then(function (res) {
      $scope.dataEmployees = res.data;
      // console.log($scope.dataCustomer);
    })
  }

  $scope.loadView();

  $scope.onClickInsert = function(){
    // console.log('onClickInsert');
    $window.location.href = VIEW_URL+"Employee/EmployeeForm";
  }

  $scope.onClickUpdate = function(dataEmployee){
    // console.log('onClickUpdate');
    // console.log(dataCustomer.profileId);
    $window.location.href = VIEW_URL+'Employee/EmployeeForm/?profileId=' + dataEmployee.profileId;
  }


  // ---------------------------------------------------------------------------

});
