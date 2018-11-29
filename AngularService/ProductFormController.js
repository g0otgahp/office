// Define the `PhoneListController` controller on the `phonecatApp` module
App.controller('ProductFormCtrl', function($scope, $http, $window, $location, $uibModal) {
  //ProductFormController--------------------------------------------------------------------

  // console.log("ProductFormController");
  var productId = $location.search().productId;

  // console.log(productId);

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

  if(!productId){
    // console.log("insert");
    $scope.form = {};

    $scope.insert = "true";
    $scope.update = "false";
    $scope.delete = "false";

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
        // console.log(category);
        $scope.form.productCategory = category.product_categoryId;
        $scope.CategoryName = category.product_categoryName;
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
        // console.log(brand);
        $scope.form.productBrand = brand.product_brandId;
        $scope.BrandName = brand.product_brandName;
      })
    };

    $scope.onClickInsert = function(){
      // console.log("onClickInsert");
      // console.log($scope.form);

      $http.post(URL+'Product/ProductInsert',{
        'dataInsert' : $scope.form
      }).then(function(res){
        // console.log(res);
        $window.alert("เพิ่มสินค้าสำเร็จ");
        $window.location.href = VIEW_URL+"Product";
      })
    }

  }else{
    // console.log("update");

    $scope.form = {};
    $scope.form.productId = productId;

    $scope.insert = "false";
    $scope.update = "true";
    $scope.delete = "true";

    $http.post(URL+'Product/SelectForUpdate',{
      'dataSelect' : $scope.form
    }).then(function (res) {
      $scope.form = res.data[0];

      $scope.CategoryName = $scope.form.product_categoryName;
      $scope.BrandName = $scope.form.product_brandName;
      // console.log($scope.form);
    })

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
        // console.log(category);
        $scope.form.productCategory = category.product_categoryId;
        $scope.CategoryName = category.product_categoryName;
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
        // console.log(brand);
        $scope.form.productBrand = brand.product_brandId;
        $scope.BrandName = brand.product_brandName;
      })
    };

    $scope.onClickUpdate = function(){
      // console.log("onClickUpdate");
      $scope.formUpdate = {
        'productId' : $scope.form.productId ,
        'productCode' : $scope.form.productCode ,
        'productCategory' : $scope.form.productCategory ,
        'productBrand' : $scope.form.productBrand ,
        'productModel' : $scope.form.productModel ,
        'productDetail' : $scope.form.productDetail ,
        'productUnit' : $scope.form.productUnit ,
        'productCost' : $scope.form.productCost ,
        'productRetail' : $scope.form.productRetail ,
        'productUser1' : $scope.form.productUser1 ,
        'productUser2' : $scope.form.productUser2 ,
        'productDealer1' : $scope.form.productDealer1 ,
        'productDealer2' : $scope.form.productDealer2 ,
      };
      // console.log($scope.formUpdate);
      $http.post(URL+'Product/ProductUpdate',{
        'dataUpdate' : $scope.formUpdate
      }).then(function(res){
        // console.log(res);
        $window.alert("แก้ไขสินค้าสำเร็จ");
        $window.location.href = VIEW_URL+"Product";
      })

    }

    $scope.onClickDelete = function(){
      // console.log("onClickDelete");
      $scope.formDelete = {
        'productId' : $scope.form.productId
      };

      $http.post(URL+'Product/ProductDelete',{
        'dataDelete' : $scope.formDelete
      }).then(function(res){
        // console.log(res);
        $window.alert("ลบสินค้าสำเร็จ");
        $window.location.href = VIEW_URL+"Product";
      })
    }

  }



  // ---------------------------------------------------------------------------

});
