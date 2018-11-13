// Define the `phonecatApp` module
var App = angular.module('App', [
  'ui.bootstrap',
  'datatables',
  'datatables.tabletools',
  'datatables.buttons',
  'datatables.select',
  'datatables.columnfilter',
]);




  //Autoload--------------------------------------------------------------------
  var VIEW_URL = "http://localhost/office/";
  var URL = "http://localhost/office/ApiService/api/";

  // var VIEW_URL = "http://office.newzeno.com/";
  // var URL = "http://office.newzeno.com/ApiService/api/";
