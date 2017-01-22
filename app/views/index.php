<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Twitapedia - Info for the Impatient</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script src="/js/index.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="myCtrl">
		<form id="my-search">
			<label>Search:</label>
			<input type="text" ng-model="term" ng-change="getResults()"/>
			<input type="button" value="Submit" />
		</form>
		<div>
			<h3>Results for: {{term}}</h3>
		</div>
	</div>
</body>
</html>
