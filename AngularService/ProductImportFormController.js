// Define the `PhoneListController` controller on the `phonecatApp` module
App.controller('ProductImportFormCtrl', function($scope, $http, $uibModal, $window, $location) {
  //ProductController--------------------------------------------------------------------

  // console.log("ProductImportFormCtrl");

  $scope.sessionid = $location.search().profileId;
  // console.log($scope.sessionid);

  $scope.Forms = {
    SelectProduct : [],
    Profile : [],
    Document : [],
  };

  $scope.loadProduct = function () {
    $http.get(URL+'Service/product').then(function (res) {
      $scope.product = res.data;
    })
  };

  $scope.loadProfile = function () {
    $http.get(URL+'ProductImport/SelectProfile/'+$scope.sessionid).then(function (res) {
      $scope.Forms.Profile = res.data;
      $scope.Forms.Profile[0].stockReciveName = "คุณ " + $scope.Forms.Profile[0].profileName + " " + $scope.Forms.Profile[0].profileSurname;
      // console.log($scope.Forms.Profile[0]);
    })
  };

  $scope.loadProfile();

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

  $scope.addBlankProduct = function(){

    // console.log('addBlankProduct');
    // $scope.Select = product;
    $scope.Select = {};
    $scope.Select.productQty = 1;
    $scope.Select.productName = "";
    $scope.Select.productDetail = "";
    $scope.Forms.SelectProduct.push($scope.Select);

  }

  $scope.onClickImport = function(){
    console.log($scope.Forms);
  };



  // ---------------------------------------------------------------------------

});
