// Define the `PhoneListController` controller on the `phonecatApp` module
App.controller('SupplierFormCtrl', function($scope, $http, $window, $location) {
  //supplier function--------------------------------------------------------------------


  var supplierId = $location.search().supplierId;

  // console.log(supplierId);

  $http.get(URL+'Supplier/Provinces').then(function (res) {
    $scope.dataProvinces = res.data;
    // console.log($scope.dataProvinces);
  })

  $scope.idProvinces = function(){
    // console.log($scope.form.supplierProvinces);

    $http.post(URL+'Supplier/Districts',{
      'idProvinces' : $scope.form.supplierProvinces
    }).then(function (res) {
      $scope.dataDistricts = res.data;
      // console.log($scope.dataDistricts);
    })

  }

  $scope.idDistricts = function(){
    // console.log($scope.form.supplierDistricts);

    $http.post(URL+'supplier/Subdistricts',{
      'idDistricts' : $scope.form.supplierDistricts
    }).then(function (res) {
      $scope.dataSubDistricts = res.data;
      // console.log($scope.dataSubDistricts);
    })

  }

  $scope.idSubDistricts = function(){
    // console.log($scope.form.supplierSubDistricts);

    $http.post(URL+'supplier/Zipcode',{
      'idSubDistricts' : $scope.form.supplierSubDistricts
    }).then(function (res) {
      $scope.dataZipcode = res.data;
      $scope.form.supplierZipcode = $scope.dataZipcode[0].zip_code;
    })
  }

  if(!supplierId){

    console.log("supplierInsert");

    $scope.form = {};
    $scope.form.supplierPrefix = "นาย";
    $scope.form.supplierSex = "ชาย";
    $scope.form.supplierProvinces = "0";
    $scope.form.supplierDistricts = "0";
    $scope.form.supplierSubDistricts = "0";

    $scope.insert = "true";
    $scope.update = "false";
    $scope.delete = "false";

    $scope.onClickInsert = function(){

      // console.log("onClickInsert");

      // console.log($scope.form);

      $http.post(URL+'Supplier/SupplierInsert',{
        'dataInsert' : $scope.form
      }).then(function (res) {
        console.log(res);
        $window.alert("เพิ่มลูกค้าสำเร็จ");
        $window.location.href = VIEW_URL+"Supplier";
      })

    }

  }else{

    console.log("supplierUpdate");

    $scope.form = {};
    $scope.insert = "false";
    $scope.update = "true";
    $scope.delete = "true";


    $http.post(URL+'Supplier/SelectForUpdate',{
      'supplierId' : supplierId
    }).then(function (res) {
      // console.log(res);

      $scope.form = res.data[0];
      // $scope.form.supplierProvinces = "0";
      // $scope.form.supplierDistricts = "0";
      // $scope.form.supplierSubDistricts = "0";
      // $scope.form.supplierZipcode = "";

    })

    $scope.onClickUpdate = function(){

      // console.log("onClickUpdate");
      // console.log($scope.form);

        $http.post(URL+'Supplier/SupplierUpdate',{
          'dataUpdate' : $scope.form
        }).then(function (res) {
          console.log(res);
          $window.alert("แก้ไขลูกค้าสำเร็จ");
          $window.location.href = VIEW_URL+"Supplier";
        })

    }

    $scope.onClickDelete = function(){

      // console.log("onClickDelete");
      // console.log($scope.form.supplierId);

        $http.post(URL+'Supplier/SupplierDelete',{
          'supplierId' : $scope.form.supplierId
        }).then(function (res) {
          console.log(res);
          $window.alert("ลบลูกค้าสำเร็จ");
          $window.location.href = VIEW_URL+"Supplier";
        })

    }

  }



  // ---------------------------------------------------------------------------

});
