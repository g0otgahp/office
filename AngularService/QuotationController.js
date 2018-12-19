// Define the `PhoneListController` controller on the `phonecatApp` module
App.controller('QuotationCtrl', function Controller($scope, $http, $uibModal, $window, $location) {
  $scope.sessionid = $location.search().sid;
  $scope.Forms = {
    SelectCustomer : [],
    SelectProduct : [],
  };

  //Quotation function--------------------------------------------------------------------
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

  $scope.remove = function (data) {
    $scope.Forms.SelectProduct.splice($scope.Forms.SelectProduct.indexOf(data), 1);
  };

  $scope.checkproduct = function () {
    console.log($scope.Forms);
  };

  $scope.submit = function () {
    data = {
      'Forms' : $scope.Forms,
      'sessionId' : $scope.sessionid,
    }
    $http.post(URL+'Service/quotationSubmit',data).then(function (res) {
      $window.location.href = VIEW_URL+'Quotation';
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

    }).result.then(function(customer) {
      $scope.Forms.SelectCustomer = customer;
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
      $scope.Select.productName = product['product_categoryName']+" "+product['product_brandName']+" รุ่น "+ product['productModel'];
      $scope.Forms.SelectProduct.push($scope.Select);
    })
  };

  $scope.addBlankProduct = function(){

    // console.log('addBlankProduct');
    // $scope.Select = product;
    $scope.Select = {};
    $scope.Select.productDiscount = 0;
    $scope.Select.productQty = 1;
    $scope.Select.productName = "";
    $scope.Select.productDetail = "";
    $scope.Forms.SelectProduct.push($scope.Select);

  }

  // ---------------------------------------------------------------------------

});
