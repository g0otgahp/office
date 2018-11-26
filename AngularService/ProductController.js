// Define the `PhoneListController` controller on the `phonecatApp` module
App.controller('ProductCtrl', function($scope, $http, $window, $location) {
  //ProductController--------------------------------------------------------------------

  // console.log("ProductController");

  $http.get(URL+'Product/SelectProduct').then(function (res) {
    $scope.dataProduct = res.data;
    // console.log($scope.dataProduct);
  })

  $scope.onClickInsert = function(){
    // console.log("onClickInsert");
    $window.location.href = VIEW_URL+"Product/ProductForm";
  }

  $scope.onClickUpdate = function(){
    // console.log("onClickUpdate");
  }


  // ---------------------------------------------------------------------------

});
