

var app=angular.module('teamWorks', [])

app.controller('UserController', ['$scope', function ($scope) {
	$scope = [];
	$scope.addUser = function(user) {
			 $http.post('http://teamworks.dev/users/', 'user')
			 		.success(data);
	}
}])
