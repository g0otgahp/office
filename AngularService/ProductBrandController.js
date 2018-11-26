// Define the `PhoneListController` controller on the `phonecatApp` module
App.controller('ProductBrandCtrl', function($scope, $http, $window, $location, $uibModal) {
  //ProductBrandController--------------------------------------------------------------------

  console.log("ProductBrandController");

  $scope.LoadView = function(){
    $http.get(URL+'ProductBrand/SelectProductBrand').then(function (res) {
      $scope.ProductBrand = res.data;
      // console.log($scope.$dataProductBrand);
    })
  }

  $scope.LoadView();

  $scope.onClickInsert = function(){
    // console.log("onClickInsert");
    $scope.form = {};

    $uibModal.open({
      templateUrl: VIEW_URL+'Modal/ProductBrandModal',
      scope: $scope,
      size: 'xs',
      controller: function ($scope, $uibModalInstance) {

        $scope.insert = "true";
        $scope.update = "false";
        $scope.delete = "false";

        $scope.onClickInsert = function (form) {
          // console.log(form);
          $uibModalInstance.close(form);
        };

        $scope.onClickExit = function () {
          $uibModalInstance.dismiss('cancel');
        };
      }

    }).result.then(function(form) {
      $scope.form = form;
      // console.log($scope.form);
      $http.post(URL+'ProductBrand/ProductBrandInsert',{
        'dataInsert' : $scope.form
      }).then(function(res){
        // console.log(res);
        $window.alert("เพิ่มยี่ห้อสินค้าสำเร็จ");
        $scope.LoadView();
      })

    })

  }

  $scope.onClickUpdate = function(product_brand){
    // console.log("onClickUpdate");

    $scope.form = {
      'product_brandId' : product_brand.product_brandId,
      'product_brandName' : product_brand.product_brandName,
    };

    $uibModal.open({
      templateUrl: VIEW_URL+'Modal/ProductBrandModal',
      scope: $scope,
      size: 'xs',
      controller: function ($scope, $uibModalInstance, $http, $window, $location, $uibModal) {

        $scope.insert = "false";
        $scope.update = "true";
        $scope.delete = "true";

        $scope.onClickUpdate = function (form) {
          // console.log(form);
          $uibModalInstance.close(form);
        };

        $scope.onClickExit = function () {
          $uibModalInstance.dismiss('cancel');
        };

        $scope.onClickDelete = function (form) {
          $uibModalInstance.dismiss('cancel');
          // console.log(form);
          $scope.form = form;
          // console.log($scope.form);
          $http.post(URL+'ProductBrand/ProductBrandDelete',{
            'dataDelete' : $scope.form
          }).then(function(res){
            $window.alert("ลบยี่ห้อสินค้าสำเร็จ");
            $scope.LoadView();
          })
        };
      }

    }).result.then(function(form) {

      $scope.form = form;
      // console.log($scope.form);
      $http.post(URL+'ProductBrand/ProductBrandUpdate',{
        'dataUpdate' : $scope.form
      }).then(function(res){
        // console.log(res);
        $window.alert("แก้ไขยี่ห้อสินค้าสำเร็จ");
        $scope.LoadView();
      })

    })

  }


  // ---------------------------------------------------------------------------

});
