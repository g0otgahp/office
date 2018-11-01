// Define the `PhoneListController` controller on the `phonecatApp` module
App.controller('CustomerCtrl', function Controller($scope, $http, $uibModal) {
  //Quotation function--------------------------------------------------------------------

  $scope.loadCustomer = function () {
    $http.get(URL+'customer').then(function (res) {
      $scope.customer = res.data;
    })
  };

  $scope.loadProduct = function () {
    $http.get(URL+'product').then(function (res) {
      $scope.product = res.data;
    })
  };



  // ---------------------------------------------------------------------------

});
