// Define the `PhoneListController` controller on the `phonecatApp` module
App.controller('ProductCtrl', function($scope, $http, $window, $location) {
  //ProductController--------------------------------------------------------------------

  // console.log("ProductController");

  $scope.loadView = function(){
    $http.get(URL+'Product/SelectProduct').then(function (res) {
      $scope.dataProduct = res.data;
      // console.log($scope.dataProduct);
    })
  }

  $scope.loadView();

  $scope.onClickInsert = function(){
    // console.log("onClickInsert");
    $window.location.href = VIEW_URL+"Product/ProductForm";
  }

  $scope.onClickUpdate = function(product){
    // console.log("onClickUpdate");
    // console.log(product.productId);
    $window.location.href = VIEW_URL+"Product/ProductForm/?productId=" + product.productId;

  }


  // ---------------------------------------------------------------------------

});
