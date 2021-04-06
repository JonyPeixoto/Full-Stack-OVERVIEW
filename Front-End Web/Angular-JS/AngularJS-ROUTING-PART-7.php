<!DOCTYPE html>
<html>
<head>
	<title>JS Angular</title>
</head>
<body ng-app="myApp">

<p><a href="#/!">Main</a></p>

<a href="#!red">Red</a>
<a href="#!cart">Cart</a>

<div ng-view></div>

<!--
<div ng-app="myApp" ng-controller="myCtrl">

<div ng-bind-html="answer"></div>

</div>
-->

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<script>
var obj = {
		method : "GET",
		url : "ajax.html",
	};
	/*
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http, $sce) {
	/*
  $http(obj).then( function mySuccess(response) {
    $scope.answer = $sce.trustAsHtml(response.data);
  }, function myError(response) {
    $scope.myWelcome = response.statusText;
  });
	
});
*/
var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
	  $routeProvider.when("/", {
	    templateUrl : "PART6-7/ajax.html"
	  })
	  .when("/red", {
	    templateUrl : "PART6-7/red.html"
	  }).when("/cart",{
	  	templateUrl: "PART6-7/cart.html"
	})
});
</script>
</body>
</html>