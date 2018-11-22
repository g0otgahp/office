// Define the `PhoneListController` controller on the `phonecatApp` module
App.controller('CustomerCtrl', function($scope, $http, $window, $location) {
  //Customer function--------------------------------------------------------------------

  $http.get(URL+'Customer/SelectCustomer').then(function (res) {
    $scope.dataCustomer = res.data;
    // console.log($scope.dataCustomer);
  })


  $scope.onClickInsert = function(){
    // console.log("onClickInsert");
    $window.location.href = VIEW_URL+"Customer/CustomerForm";
  }


  $scope.onClickUpdate = function(customer){
    // console.log("onClickUpdate");
    // var url = "Customer/CustomerForm/" + customer.customerId;
    $window.location.href = VIEW_URL+"Customer/CustomerForm/?customerId=" + customer.customerId;

  }


  // ---------------------------------------------------------------------------

});
