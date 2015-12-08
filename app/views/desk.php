
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
			<h1 class="logo">teaMWorks</h1>
		

		</header>

<div class="container">

	<?php

		$level = Auth::user()->privilage;

		 /************  GET THE FUNCTION FOR HR ************/
			if( $level==1) // Can Be A Owner, Chairperson or Who makes recuritment
			include '/partials/hr.php';
	?>	

	<?php /************  GET THE FUNCTION FOR head ************/
			if( $level==2) // Can be A Manager, Project Head, Department Head
			include '/partials/member.php';
	?>

	<?php /************  GET THE FUNCTION FOR member ************/
			if( $level==3) // Can be An company Employee, Project Person etc.
			include '/partials/member.php';
	?>

	<?php /************  GET THE FUNCTION FOR visitor ************/
			if( $level==4) 
			include '/partials/visitor.php';
	?>
</div>
	
			<!-- Main Footer -->
		 <footer class="app-footer">
		    <!-- To the right -->
			    <div class="pull-right">
			      	For Learning Purpose
			      	<a href="/logout" class="btn btn-info">LogOut</a>
			    </div>
			    <!-- Default to the left -->
		    	<caption>Login as <?php echo Auth::user()->name; ?></caption>
		 </footer>
	

<body >


<script src="/resources/jquery/jquery.min.js"></script>
	
<script src="/resources/jquery/bootstrap.min.js"></script>

<script src="/resources/jquery/app-functions.js"></script>


</body>
</html>
