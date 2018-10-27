// Define the `phonecatApp` module
var App = angular.module('App', [
  'ui.bootstrap'
]);

// Define the `PhoneListController` controller on the `phonecatApp` module
App.controller('Ctrl', function PhoneListController($scope, $http, $uibModal) {

  $scope.name;

  //Autoload--------------------------------------------------------------------
  var VIEW_URL = "http://localhost/office/";
  var URL = "http://localhost/RESTFUL_API/api/Service/";
  // var URL = "http://localhost/RESTFUL_API/api/Service/";

  $http.get(URL+'home').then(function (res) {
    $scope.data = res.data;
    $scope.name = res.data.name;
    console.log($scope.data);
    console.log($scope.name);

  })


  //function--------------------------------------------------------------------
  $scope.CheckName = function () {
    console.log($scope.name);
  }

  $scope.openModal = function () {
    $uibModal.open({
      templateUrl: VIEW_URL+'Modal/MemberModal',
      scope: $scope,

      controller: function ($scope, $uibModalInstance) {
        $scope.ok = function () {
          $uibModalInstance.close();
        };

        $scope.cancel = function () {
          $uibModalInstance.dismiss('cancel');
        };
      }

    }).result.then(function() {
      $scope.name = 'สมโอเค';
    })
  };
});
