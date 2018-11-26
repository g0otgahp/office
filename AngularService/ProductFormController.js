// Define the `PhoneListController` controller on the `phonecatApp` module
App.controller('ProductFormCtrl', function($scope, $http, $window, $location) {
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
      $window.location.href = VIEW_URL+"Product";
    })


  }



  // ---------------------------------------------------------------------------

});
