// Define the `PhoneListController` controller on the `phonecatApp` module
App.controller('CustomerFormCtrl', function($scope, $http, $window, $location) {
  //Customer function--------------------------------------------------------------------


  var customerId = $location.search().customerId;

  $http.get(URL+'Customer/Provinces').then(function (res) {
    $scope.dataProvinces = res.data;
    // console.log($scope.dataProvinces);
  })

  $scope.idDistricts = function(){
    // console.log($scope.form.customerProvinces);

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

  $scope.idZipcode = function(){
    // console.log($scope.form.customerSubDistricts);

    $http.post(URL+'Customer/Zipcode',{
      'idZipcode' : $scope.form.customerSubDistricts
    }).then(function (res) {
      $scope.dataZipcode = res.data;
      $scope.form.customerZipcode = $scope.dataZipcode[0].zip_code;
    })
  }

  if(!customerId){

    // console.log("CustomerInsert");
    $scope.form = {};
    $scope.form.customerPrefix = "นาย";
    $scope.form.customerSex = "ชาย";
    $scope.form.customerProvinces = "0";
    $scope.form.customerDistricts = "0";
    $scope.form.customerSubDistricts = "0";

    $scope.insert = "true";
    $scope.update = "false";
    $scope.delete = "false";

    $scope.onClickInsert = function(){

      // console.log("onClickInsert");

      // console.log($scope.form);

      $http.post(URL+'Customer/CustomerInsert',{
        'dataInsert' : $scope.form
      }).then(function (res) {
        console.log(res);
        $window.alert("เพิ่มลูกค้าสำเร็จ");
        $window.location.href = VIEW_URL+"Customer";
      })

    }

  }else{

    // console.log("CustomerUpdate");

    $scope.form = {};
    $scope.insert = "false";
    $scope.update = "true";
    $scope.delete = "true";


    $http.post(URL+'Customer/SelectForUpdate',{
      'customerId' : customerId
    }).then(function (res) {
      // console.log(res);

      $scope.form = res.data[0];
      // $scope.form.customerProvinces = "0";
      // $scope.form.customerDistricts = "0";
      // $scope.form.customerSubDistricts = "0";
      // $scope.form.customerZipcode = "";

    })

    $scope.onClickUpdate = function(){

      // console.log("onClickUpdate");
      // console.log($scope.form);

        $http.post(URL+'Customer/CustomerUpdate',{
          'dataUpdate' : $scope.form
        }).then(function (res) {
          console.log(res);
          $window.alert("แก้ไขลูกค้าสำเร็จ");
          $window.location.href = VIEW_URL+"Customer";
        })

    }

    $scope.onClickDelete = function(){

      // console.log("onClickDelete");
      // console.log($scope.form.customerId);

        $http.post(URL+'Customer/CustomerDelete',{
          'customerId' : $scope.form.customerId
        }).then(function (res) {
          console.log(res);
          $window.alert("ลบลูกค้าสำเร็จ");
          $window.location.href = VIEW_URL+"Customer";
        })

    }

  }



  // ---------------------------------------------------------------------------

});
