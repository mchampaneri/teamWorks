
<!DOCTYPE html>
<html  style="height:100%;" ng-app="teamWorks">
<head>
	<title> TeamWorks | Login </title>

	<script src="/resources/jquery/angular.min.js"></script>
	<script src="/resources/jquery/angular/app.js"></script>
	
	

	<link rel="stylesheet" type="text/css" 
		  href="/resources/css/reset.css">

	<link rel="stylesheet" type="text/css" 
		  href="/resources/css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" 
	      href="/resources/css/bootstrap-theme.min.css">

	<link rel="stylesheet" type="text/css" 
	      href="/resources/css/AdminLTE.min.css">

	<link rel="stylesheet" type="text/css"
		  href="/resources/css/skins/skin-blue.min.css">

	<link rel="stylesheet" type="text/css" 
	      href="/resources/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" 
	      href="/resources/css/app-styles.css">




</head>
<body>





		<header>

			<div class="row" ng-controller="SettingsController">
				<h1 class="logo">teaMWorks					
				     <a  class="btn btn-primary" value="Logout" href="/logout" > LogOut</a>
				   	 <a  class="btn btn-primary" value="Setting" onclick="disp('#settings')"> Settings </a>			
				</h1>		
			 	
			    <!-- Default to the left -->
		    
		    </div>
		</header>

<div class="container-fluid workspace">

	<?php

		$level = Auth::user()->privilage;

		 /************  GET THE FUNCTION FOR HR ************/
			if( $level==1) // Use to Crete New User and Manage The application
			include '/partials/sm.php';
	?>	

	<?php /************  GET THE FUNCTION FOR head ************/
			if( $level==2) // Can be A Manager, Project Head, Department Head
			include '/partials/manager.php';
	?>

	<?php /************  GET THE FUNCTION FOR member ************/
			if( $level==3) // Can be An company Employee, Project Person etc.
			include '/partials/member.php';
	?>

	<?php /************  GET THE FUNCTION FOR EmployeeControlle ************/
			if( $level==4) 
			include '/partials/ems.php';
	?>
</div>
	
			<!-- Main Footer -->
		
	

<body >


<script src="/resources/jquery/jquery.min.js"></script>
	
<script src="/resources/jquery/bootstrap.min.js"></script>

<script src="/resources/jquery/app-functions.js"></script>


</body>
</html>
