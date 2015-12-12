

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
			
					$scope.User=user;
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
				      		$scope.user = [];
				      		
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
							$http.post('/projects', newProject)
									.success(function(data) {
										console.log(data);
										$scope.project = [];
									});													
						};


	$scope.oldProjects = function(){
						$http.get('/projects').
								success(function(data) {
									$scope.projects =data;
									console.log(data);
								});
						
						};

}]);
    
/********* SettingS Controller ******************/

app.controller('SettingsController', ['$scope', function ($scope) {
	$scope.Settings = function(){
				$http.get('/logout')
						.success(function(data) {
							console.log(data);
							
						});
			}
}])

/********* Member Controller ******************/

app.controller('MemberController', ['$scope','$http', function ($scope,$http) {

	$scope.unfilleds=[];

	$scope.getUnfilled = function(){						
					     $http.get('/members/create')
						    	.success(function(data){
							    	console.log(data);
							    	$scope.unfilleds = data;
						    	});	
						    };	

	$scope.fillup = function(detail){						
						console.log(detail);
						
						$http.post('/members',detail)
								.success(function(data){
									console.log(data);
									$scope.unfilleds.splice(detail.index,1);
								});
				
					
					};					
				
}])