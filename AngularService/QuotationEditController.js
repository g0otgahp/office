// Define the `PhoneListController` controller on the `phonecatApp` module
App.controller('QuotationEditCtrl', function Controller($scope, $http, $uibModal, $window, $location) {
  $scope.Forms = {
    SelectCustomer : [],
    SelectProduct : [],
  };
  $scope.sessionid = $location.search().sid;
  $scope.quoNo = $location.search().no;
  $scope.quoId = $location.search().quoid;
  const body = {
    'sessionid' : $scope.sessionid,
    'quoNo' : $scope.quoNo,
    'quoId' : $scope.quoId,
  };
  $http.post(URL+'Service/SelectQuo', body).then(function (res) {
    //Set Customer
    $scope.Forms.SelectCustomer = res.data.customer[0];
    $scope.Forms.SelectCustomer.quoId = res.data.quotation[0].quoId;
    $scope.Forms.SelectCustomer.quoNo = res.data.quotation[0].quoNo;
    $scope.Forms.SelectCustomer.quoNote = res.data.quotation[0].quoNote;
    $scope.Forms.SelectCustomer.quoPayments = res.data.quotation[0].quoPayments;
    $scope.Forms.SelectCustomer.quoProject = res.data.quotation[0].quoProject;
    $scope.Forms.SelectCustomer.quoReachDay = res.data.quotation[0].quoReachDay;
    $scope.Forms.SelectCustomer.quoRemark1 = res.data.quotation[0].quoRemark1;
    $scope.Forms.SelectCustomer.quoRemark2 = res.data.quotation[0].quoRemark2;
    $scope.Forms.SelectCustomer.quoRemark3 = res.data.quotation[0].quoRemark3;
    $scope.Forms.SelectCustomer.quoTransportDay = res.data.quotation[0].quoTransportDay;
    $scope.Forms.SelectCustomer.quoDate = res.data.quotation[0].quoDate;

    //Set Product
    angular.forEach(res.data.quotation_order, function(value, key){
      $scope.Forms.SelectProduct.push(value);
    });


    console.log($scope.Forms);
  })



  //Quotation function--------------------------------------------------------------------
  // $scope.loadQuotation = function () {
  //   const body = {
  //     'sessionid' : $scope.sessionid,
  //     'quoNo' : $scope.quoNo,
  //   };
  //   $http.get(URL+'Service/customer', body).then(function (res) {
  //     console.log(res);
  //   })
  // };

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
    $http.post(URL+'Service/quotationSubmitUpdate',data).then(function (res) {
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
