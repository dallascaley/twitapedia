<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>

<body>
<div ng-app="myApp" ng-controller="myCtrl">
	<form id="my-search">
		<label>Search:</label>
		<input type="text" ng-model="searchTerm"/>
		<input type="button" value="Submit" />
	</form>
	<div>
		<h3>Results for: {{searchTerm}}</h3>
	</div>
</div>

<script>
	var app = angular.module('myApp', []);
	app.controller('myCtrl', function($scope) {
		$scope.searchTerm = 'Your search...';
	});
</script>
</body>
</html>
