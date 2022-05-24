<!DOCTYPE html>
<html>
<head>
	<title>JS Angular</title>
</head>
<body>

<!--
<div ng-app="myApp" ng-controller="myCtrl">

<div ng-bind-html="answer"></div>

</div>
-->

<div ng-app="myApp" ng-controller="myCtrl">

<p>The name is {{lastName|lowercase}}</p>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script>
var obj = {
		method : "GET",
		url : "PART6-7/ajax.html",
	};
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http, $sce) {
	$scope.lastName = "Peixoto";
	/*
  $http(obj).then( function mySuccess(response) {
    $scope.answer = $sce.trustAsHtml(response.data);
  }, function myError(response) {
    $scope.myWelcome = response.statusText;
  });
	*/
});
</script>
</body>
</html>