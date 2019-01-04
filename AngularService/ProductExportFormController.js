// Define the `PhoneListController` controller on the `phonecatApp` module
App.controller('ProductExportFormCtrl', function($scope, $http, $uibModal, $window, $location) {
  //ProductController--------------------------------------------------------------------

  // console.log("ProductImportFormCtrl");

  $scope.sessionid = $location.search().profileId;
  // console.log($scope.sessionid);

  $scope.Forms = {
    SelectProduct : [],
    Customer : [],
    // Employee : [],
    Profile : [],
    Document : [],
  };

  $scope.loadProfile = function () {
    $http.get(URL+'ProductImport/SelectProfile/'+$scope.sessionid).then(function (res) {
      $scope.Forms.Profile = res.data;
      $scope.Forms.Profile[0].stockReciveName = "คุณ " + $scope.Forms.Profile[0].profileName + " " + $scope.Forms.Profile[0].profileSurname;
      // console.log($scope.Forms.Profile[0]);

    })
  };

  $scope.loadProfile();

  $scope.loadCustomer = function () {
    $http.get(URL+'Service/customer').then(function (res) {
      $scope.customer = res.data;
    })
  };

  $scope.loadProduct = function () {
    $http.get(URL+'Service/product').then(function (res) {
      $scope.product = res.data;
    })
  };

  // $scope.loadEmployee = function () {
  //   $http.get(URL+'Service/employee').then(function (res) {
  //     $scope.employee = res.data;
  //     // console.log($scope.employee);
  //   })
  // };

  $scope.onClickSelectCustomer = function(){
    console.log("onClickSelectCustomer");

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

    }).result.then(function(customer) {
      $scope.Forms.Customer = customer;
      // console.log($scope.Forms.Customer);
      $scope.Forms.Customer.customerName = "คุณ " + $scope.Forms.Customer.customerName;

    })

  }

  $scope.onClickSelectProduct = function(){
    console.log("onClickSelectProduct");

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
      }}).result.then(function(product) {
        $scope.Select = product;
        $scope.Select.productQty = 1;
        $scope.Select.productName = product['product_categoryName']+" "+product['product_brandName']+" รุ่น "+ product['productModel'];
        $scope.Forms.SelectProduct.push($scope.Select);
        // console.log($scope.Forms.SelectProduct);
      })
  };

  // $scope.onClickSelectEmployee = function(){
  //   console.log("onClickSelectEmployee");
  //
  //   $scope.loadEmployee();
  //   $uibModal.open({
  //     templateUrl: VIEW_URL+'Modal/EmployeeModal',
  //     scope: $scope,
  //     size: 'lg',
  //
  //     controller: function ($scope, $uibModalInstance) {
  //       $scope.ok = function (employee) {
  //         $uibModalInstance.close(employee);
  //       };
  //
  //       $scope.cancel = function () {
  //         $uibModalInstance.dismiss('cancel');
  //       };
  //     }}).result.then(function(employee) {
  //       // $scope.Forms.Employee = employee;
  //       // console.log($scope.Forms.Customer);
  //
  //     })
  // };

  $scope.addBlankProduct = function(){

    // console.log('addBlankProduct');
    // $scope.Select = product;
    $scope.Select = {};
    $scope.Select.productQty = 1;
    $scope.Select.productName = "";
    $scope.Select.productDetail = "";
    $scope.Forms.SelectProduct.push($scope.Select);

  }

  $scope.onClickExport = function(){
    console.log($scope.Forms);
  };



  // ---------------------------------------------------------------------------

});
