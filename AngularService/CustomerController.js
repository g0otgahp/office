// Define the `PhoneListController` controller on the `phonecatApp` module
App.controller('CustomerCtrl', function($scope, $http, $window, $location) {
  //Customer function--------------------------------------------------------------------

  // var data = $location.search('customerId');
  // var data = $location.search('name');

  // var data = {
  //   idCustomer : $location.search().customerId
  // }

  // console.log(searchObject);
  // console.log(data);


  $scope.form = {};
  $scope.form.customerPrefix = "นาย";
  $scope.form.customerSex = "ชาย";
  $scope.form.customerProvinces = "0";
  $scope.form.customerDistricts = "0";
  $scope.form.customerSubDistricts = "0";


  $http.get(URL+'Customer/Provinces').then(function (res) {
    $scope.dataProvinces = res.data;
    // console.log($scope.dataProvinces);
  })

  $scope.idDistricts = function(){
    // console.log($scope.form);

    $http.post(URL+'Customer/Districts',{
      'idDistricts' : $scope.form.customerProvinces
    }).then(function (res) {
      $scope.dataDistricts = res.data;
      // console.log($scope.dataDistricts);
    })

  }

  $scope.idSubDistricts = function(){
    // console.log($scope.form.customerDistricts);

    $http.post(URL+'Customer/Subdistricts',{
      'idSubDistricts' : $scope.form.customerDistricts
    }).then(function (res) {
      $scope.dataSubDistricts = res.data;
      // console.log($scope.dataSubDistricts);
    })

  }

  $scope.CustomerInsert = function(){

    // console.log($scope.form);

    $http.post(URL+'Customer/CustomerInsert',{
      'dataInsert' : $scope.form
    }).then(function (res) {
      console.log(res);
      $window.alert("เพิ่มลูกค้าสำเร็จ");
      $window.location.href = VIEW_URL+"Customer";
    })

  }


  // console.log($scope.idDistricts);





  // ---------------------------------------------------------------------------

});
