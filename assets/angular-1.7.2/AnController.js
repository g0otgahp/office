// Define the `phonecatApp` module
var phonecatApp = angular.module('App', []);

// Define the `PhoneListController` controller on the `phonecatApp` module
phonecatApp.controller('Ctrl', function PhoneListController($scope, $http) {

    //Autoload--------------------------------------------------------------------
    // var URL = "http://localhost/newzeno/Service/";
    var URL = "https://www.newzeno.com/Service/";

    $http.get(URL+'selectBrand.php').then(function (res) {
        $scope.brand = res.data;
        // console.log($scope.brand);
    })

    $http.get(URL+'selectGroup.php').then(function (res) {
        $scope.group = res.data;
        // console.log($scope.group);
    })


    //function--------------------------------------------------------------------
    $scope.selectGroup = function () {
        var post = {id : $scope.productGroupid};
        $http.post(URL+'selectCategory.php',post).then(function (res) {
            $scope.category = res.data;
            console.log($scope.category);
        })
    }
});
