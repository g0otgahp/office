// Define the `PhoneListController` controller on the `phonecatApp` module
App.controller('ProductImportCtrl', function($scope, $http, $uibModal, $window, $location) {
  //ProductImportCtrl--------------------------------------------------------------------

  $scope.LoadStock = function(){
    $http.post(URL+'Stock/StockList',{Type:'IN'}).then(function (res) {
      if (res.status === 200) {
        $scope.StockList = res.data.stock;
        // console.log($scope.StockList);
      }
    })
  }

  $scope.LoadStock();


  // ---------------------------------------------------------------------------

});
