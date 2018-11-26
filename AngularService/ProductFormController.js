// Define the `PhoneListController` controller on the `phonecatApp` module
App.controller('ProductFormCtrl', function($scope, $http, $window, $location, $uibModal) {
  //ProductFormController--------------------------------------------------------------------

  // console.log("ProductFormController");
  $scope.form = {};

  $scope.onClickInsert = function(){
    // console.log("onClickInsert");
    // console.log($scope.form);

    $http.post(URL+'Product/ProductInsert',{
      'dataInsert' : $scope.form
    }).then(function(res){
      // console.log(res);
      $window.alert("เพิ่มสินค้าสำเร็จ");
      // $window.location.href = VIEW_URL+"Product";
    })
  }

  $scope.loadCategory = function () {
    $http.get(URL+'ProductCategory/SelectProductCategory').then(function (res) {
      $scope.ProductCategory = res.data;
    })
  };

  $scope.loadBrand = function () {
    $http.get(URL+'ProductBrand/SelectProductBrand').then(function (res) {
      $scope.ProductBrand = res.data;
    })
  };


  $scope.openCategoryModal = function () {
    $scope.loadCategory();
    $uibModal.open({
      templateUrl: VIEW_URL+'Modal/CategoryModal',
      scope: $scope,
      size: 'lg',
      controller: function ($scope, $uibModalInstance) {
        $scope.ok = function (category) {
          $uibModalInstance.close(category);
        };

        $scope.cancel = function () {
          $uibModalInstance.dismiss('cancel');
        };
      }

    }).result.then(function(category) {
      $scope.form.productCategory = category.product_categoryId;
      $scope.form.productCategoryName = category.product_categoryName;
    })
  };

  $scope.openBrandModal = function () {
    $scope.loadBrand();
    $uibModal.open({
      templateUrl: VIEW_URL+'Modal/BrandModal',
      scope: $scope,
      size: 'lg',
      controller: function ($scope, $uibModalInstance) {
        $scope.ok = function (brand) {
          $uibModalInstance.close(brand);
        };

        $scope.cancel = function () {
          $uibModalInstance.dismiss('cancel');
        };
      }

    }).result.then(function(brand) {
      $scope.form.productBrand = brand.product_brandId;
      $scope.form.productBrandName = brand.product_brandName;
    })
  };


  // ---------------------------------------------------------------------------

});
