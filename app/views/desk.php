<!DOCTYPE html>
<html  style="height:100%;">
<head>
	<title> TeamWorks | Login </title>

	<script src="/resources/jquery/angular.min.js"></script>

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

	<?php /************  GET THE FUNCTION FOR HR ************/
			if( $level==1)
			include '/partials/hr.php';
	?>	

	<?php /************  GET THE FUNCTION FOR HR ************/
			if( $level==2)
			include '/partials/member.php';
	?>

	<?php /************  GET THE FUNCTION FOR HR ************/
			if( $level==3)
			include '/partials/visitor.php';
	?>
</div>
	
			<!-- Main Footer -->
		 <footer class="app-footer">
		    <!-- To the right -->
			    <div class="pull-right">
			      	For Learning Purpose
			    </div>
			    <!-- Default to the left -->
		    	<strong>MANISH CHAMPANERI</strong>
		 </footer>
	

<body >


<script src="/resources/jquery/jquery.min.js"></script>
	
<script src="/resources/jquery/bootstrap.min.js"></script>


<script src="/resources/jquery/app.min.js"></script>

<script src="/resources/jquery/app-functions.js"></script>
</body>
</html>
