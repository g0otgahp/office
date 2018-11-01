// Define the `PhoneListController` controller on the `phonecatApp` module
App.controller('CustomerCtrl', function Controller($scope, $http, $uibModal) {

  //Autoload--------------------------------------------------------------------
  var VIEW_URL = "http://localhost/office/";
  var URL = "http://localhost/RESTFUL_API/api/Service/";

  // var VIEW_URL = "http://office.newzeno.com/";
  // var URL = "http://office.newzeno.com/RESTFUL_API/api/Service/";


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
