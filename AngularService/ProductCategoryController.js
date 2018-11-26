// Define the `PhoneListController` controller on the `phonecatApp` module
App.controller('ProductCategoryCtrl', function($scope, $http, $window, $location, $uibModal) {
  //ProductController--------------------------------------------------------------------

  // console.log("ProductCategoryController");

  $scope.LoadView = function(){
    $http.get(URL+'ProductCategory/SelectProductCategory').then(function (res) {
      $scope.ProductCategory = res.data;
      // console.log($scope.$dataProductCategory);
    })
  }

  $scope.LoadView();

  $scope.onClickInsert = function(){
    // console.log("onClickInsert");
    $scope.form = {};

    $uibModal.open({
      templateUrl: VIEW_URL+'Modal/ProductCategoryModal',
      scope: $scope,
      size: 'xs',
      controller: function ($scope, $uibModalInstance) {

        $scope.insert = "true";
        $scope.update = "false";
        $scope.delete = "false";

        $scope.onClickInsert = function (form) {
          // console.log(productCategoryName);
          $uibModalInstance.close(form);
        };

        $scope.onClickExit = function () {
          $uibModalInstance.dismiss('cancel');
        };
      }

    }).result.then(function(form) {
      $scope.form = form;

      console.log($scope.form);
      $http.post(URL+'ProductCategory/ProductCategoryInsert',{
        'dataInsert' : $scope.form
      }).then(function(res){
        // console.log(res);
        $window.alert("เพิ่มประเภทสินค้าสำเร็จ");
        $window.location.href = VIEW_URL+"ProductCategory";
      })

    })

  }

  $scope.onClickUpdate = function(product_category){
    // console.log("onClickUpdate");

    $scope.form = {
      'product_categoryId' : product_category.product_categoryId,
      'product_categoryName' : product_category.product_categoryName,
    };

    $uibModal.open({
      templateUrl: VIEW_URL+'Modal/ProductCategoryModal',
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
          $http.post(URL+'ProductCategory/ProductCategoryDelete',{
            'dataDelete' : $scope.form
          }).then(function(res){
            $window.alert("ลบประเภทสินค้าสำเร็จ");
            $scope.LoadView();
          })

        };
      }

    }).result.then(function(form) {

      $scope.form = form;
      // console.log($scope.form);
      $http.post(URL+'ProductCategory/ProductCategoryUpdate',{
        'dataUpdate' : $scope.form
      }).then(function(res){
        // console.log(res);
        $window.alert("แก้ไขประเภทสินค้าสำเร็จ");
        $window.location.href = VIEW_URL+"ProductCategory";
      })

    })

  }


  // ---------------------------------------------------------------------------

});
