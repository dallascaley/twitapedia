var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
	$scope.term = 'Your search...';
	$scope.results = [];
	$scope.getResults = function() {
		$http.get('pedia', {
			params:{
				'search_term': $scope.term
			}
		}).success(function(response){
			if(response.status == 'OK') {
				$scope.results = response.records;
			}
		})
	}
});