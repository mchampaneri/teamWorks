

var app=angular.module('teamWorks', [])


/*********************** UserS contoller For The HR *****************/

app.controller('UserController', ['$scope','$http', function ($scope,$http) {


$scope.users = [];

/**** number to name change ***/
$scope.toName = new Array();
$scope.toName[1]="Hr/Owner";
$scope.toName[2]="Manage";
$scope.toName[3]="Member";
$scope.toName[4]="Visitor"

/************ Fetching The data ***********/

$(document).ready( 
				function(){
				    	$http.get('/users')
				    			.success(function(data){  
				    				$scope.users=data;    	
				    			});
   					 });

/********** To Add  A new User *********/	
	$scope.addUser = function(user) {  
			
					var newUser = {
							email: user.email,
							password: user.password,
							name: user.name,
							privilage : user.privilage			
				        };
				        console.log(newUser);
				      $http.post('/users',newUser)
				      .success(function(){      		
				      		$scope.users.push(newUser);
				      	});

   					 };
}]);


/************  Projects Contoller For the Manager *********/

app.controller('ProjectController', ['$scope','$http', function ($scope,$http) {	

	$scope.addProject = function(project){
						var newProject = {	
							project_name : project.project_name,
							client : project.client,
							description : project.description
							};

						console.log(newProject);		
						
						};

}]);
    
