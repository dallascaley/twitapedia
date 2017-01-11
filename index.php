<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>

<body>
<div ng-app="myApp" ng-controller="myCtrl" ng-init="getResults()">
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
	app.controller('myCtrl', function($scope, $http) {
		$scope.searchTerm = 'Your search...';
		$scope.results = [];
		$scope.getResults = function() {
			$http.get('search.php', {
				params:{
					'search_term': searchTerm
				}
			}).success(function(response){
				if(response.status == 'OK') {
					$scope.results = response.records;
				}
			})
		}
	});
</script>
</body>
</html>
