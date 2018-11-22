// Define the `PhoneListController` controller on the `phonecatApp` module
App.controller('SupplierCtrl', function($scope, $http, $window, $location) {
  //Customer function--------------------------------------------------------------------

  $http.get(URL+'Supplier/SelectSupplier').then(function (res) {
    $scope.dataSupplier = res.data;
    console.log($scope.dataSupplier);
  })


  $scope.onClickInsert = function(){
    // console.log("onClickInsert");
    $window.location.href = VIEW_URL+"Supplier/SupplierForm";
  }


  $scope.onClickUpdate = function(supplier){
    // console.log("onClickUpdate");
    // var url = "Customer/CustomerForm/" + customer.customerId;
    $window.location.href = VIEW_URL+"Supplier/SupplierForm/?supplierId=" + supplier.supplierId;

  }


  // ---------------------------------------------------------------------------

});
