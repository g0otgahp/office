// Define the `phonecatApp` module
var App = angular.module('App', [
  'ui.bootstrap',
  'datatables',
  'datatables.tabletools',
  'datatables.buttons',
  'datatables.select',
  'datatables.columnfilter',
]);

// Define the `PhoneListController` controller on the `phonecatApp` module
App.controller('Ctrl', function Controller($scope, $http, $uibModal) {

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

  $scope.openModal = function () {
    $scope.loadCustomer();
    $uibModal.open({
      templateUrl: VIEW_URL+'Modal/CustomerModal',
      scope: $scope,
      size: 'lg',

      controller: function ($scope, $uibModalInstance) {
        $scope.ok = function (customer) {
          $uibModalInstance.close(customer);
        };

        $scope.cancel = function () {
          $uibModalInstance.dismiss('cancel');
        };
      }

    }).result.then(function(select) {
      $scope.SelectCustomer = select;
      console.log($scope.SelectCustomer);
    })
  };

  $scope.openProductModal = function () {
    $scope.loadProduct();
    $uibModal.open({
      templateUrl: VIEW_URL+'Modal/ProductModal',
      scope: $scope,
      size: 'lg',

      controller: function ($scope, $uibModalInstance) {
        $scope.ok = function (product) {
          $uibModalInstance.close(product);
        };

        $scope.cancel = function () {
          $uibModalInstance.dismiss('cancel');
        };
      }

    }).result.then(function(product) {
      $scope.Select = product;
      $scope.Select.productDiscount = 0;
      $scope.Select.productQty = 1;
      if (!$scope.SelectProduct){
        $scope.SelectProduct = [];
      }
      $scope.SelectProduct.push(product);
      console.log($scope.SelectProduct);
    })
  };

  // ---------------------------------------------------------------------------

});
