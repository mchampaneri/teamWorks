

var app=angular.module('teamWorks', [])

app.controller('UserController', ['$scope','$http', function ($scope,$http) {

$scope.users = new Array();

/************ Fetching The data ***********/

$(document).ready( 
				function(){
				    	$http.get('/users')
				    			.success(function(data){     				
				    				console.log(data);
				    				$scope.users = data;
				    			});
   					 });

/********** To Add  A new User *********/	
	$scope.addUser = function(user) {  
			
	var newUser = {
			user_name: user.user_name,
			password: user.password,
			name: user.name,
			privilage : user.privilage			
        };
        console.log(newUser);
      $http.post('/users',newUser)
      .success(function(data){
      		console.log(data);
      		$scope.users.push(newUser);
      	});


    };
}]);
/********** For The Checking of Connection *********/


    
